<?php

namespace App\Http\Controllers\Client;

use App\Mail\Order;
use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class PagesController extends Controller
{
    public function show(Page $page, Page $subpage = null): View
    {
        if ($subpage) {
            $page = $subpage;
        }

        return view('client.pages.default', compact('page'));
    }

    public function order(Request $request)
    {

        $data = [
            'user' => (object)$request->only('name', 'contact'),
        ];

        Mail::send(new Order($data));

        return \redirect()->route('client.index');
    }

    public function book()
    {
        $page = Page::where('slug', 'book')->first();
        $description = explode('</p>', $page->body, '3' );
        return \view('client.pages.book', compact('page', 'description') );
    }
}
