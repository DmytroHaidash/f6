<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageSavingRequest;
use App\Models\Page;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Spatie\MediaLibrary\Models\Media;

class PagesController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $pages = Page::onlyParents()->with('children')->paginate(20);

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $pages = Page::onlyParents()->get();

        return view('admin.pages.create', compact('pages'));
    }

    /**
     * @param  PageSavingRequest  $request
     * @return RedirectResponse
     */
    public function store(PageSavingRequest $request): RedirectResponse
    {
        $page = new Page($request->only('parent_id'));
        $page->makeTranslation(['title', 'body'])->save();
        $page->update(['published' => $request->has('published')]);
        if ($request->hasFile('cover')) {
            $page->addMediaFromRequest('cover')
                ->usingFileName(makeFileName($request->file('cover')))
                ->toMediaCollection('cover');
        }

        return redirect()->route('admin.pages.edit', $page);
    }

    /**
     * @param  Page  $page
     * @return View
     */
    public function edit(Page $page): View
    {
        $pages = Page::onlyParents()->where('id', '!=', $page->id)->get();

        return view('admin.pages.edit', compact('page', 'pages'));
    }

    /**
     * @param  PageSavingRequest  $request
     * @param  Page  $page
     * @return RedirectResponse
     */
    public function update(PageSavingRequest $request, Page $page): RedirectResponse
    {
        $page->fill($request->only('parent_id'));
        $page->makeTranslation(['title', 'body'])->save();
        $page->update(['published' => $request->has('published'), 'video' => $request->input('video')]);
        if ($request->hasFile('cover')) {
            $page->clearMediaCollection('cover');
            $page->addMediaFromRequest('cover')
                ->usingFileName(makeFileName($request->file('cover')))
                ->toMediaCollection('cover');
        }
        $this->handleMedia($request, $page);

        return back();
    }

    /**
     * @param  Page  $page
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Page $page)
    {
        if ($page->children->count()) {
            return back()->withErrors('К этой странице прикреплены другие записи.');
        }

        $page->delete();

        return back();
    }

    private function handleMedia(PageSavingRequest $request, Page $page): void
    {
        if ($request->filled('uploads')) {
            foreach ($request->input('uploads') as $media) {
                Media::find($media)->update([
                    'model_type' => Page::class,
                    'model_id' => $page->id
                ]);
            }

            Media::setNewOrder($request->input('uploads'));
        }

        if ($request->filled('deletion')) {
            Media::whereIn('id', $request->input('deletion'))->delete();
        }
    }
}
