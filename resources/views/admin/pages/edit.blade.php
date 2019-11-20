@extends('layouts.admin', ['page_title' => 'Редактирование страницы'])

@section('content')

    <section>
        <form action="{{ route('admin.pages.update', $page) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="row">
                <div class="col-lg-8">
                    <block-editor title="Редактирование страницы">
                        @foreach(config('app.locales') as $lang)
                            <fieldset slot="{{ $lang }}">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input id="title" type="text" name="{{$lang}}[title]"
                                           class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                           value="{{ old($lang.'.title') ?? $page->getTranslation('title', $lang) }}">
                                    @if($errors->has('title'))
                                        <div class="mt-1 text-danger">
                                            {{ $errors->first('title') }}
                                        </div>
                                    @endif
                                </div>

                                <wysiwyg label="Текст записи" name="{{$lang}}[body]"
                                         content="{{ old($lang.'.body') ?? $page->getTranslation('body', $lang) }}"
                                         class="mb-0"></wysiwyg>
                            </fieldset>
                        @endforeach

                        {{--
                        @if ($pages->count())
                            <div class="form-group">
                                <label for="category">Родительская страница</label>
                                <select name="parent_id" id="category" class="form-control">
                                    <option value="">-----</option>
                                    @foreach($pages as $pg)
                                        <option value="{{ $pg->id }}"
                                                {{ $page->parent_id == $pg->id ? 'selected' : '' }}>
                                            {{ $pg->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                        --}}
                    </block-editor>
                    @if($page->slug == 'book')
                        <label for="video" class="mt-2">Видео</label>
                        <input id="video" type="text" name="video"
                               class="form-control"
                               value="{{ old('video') ?? $page->video }}">
                    @endif
                    <div class="ml-3 mt-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="published"
                                   name="published" {{ $page->published ? 'checked' : '' }}>
                            <label class="custom-control-label" for="published">Опубликовать</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <single-uploader name="cover"
                                     src="{{ optional($page->getFirstMedia('cover'))->getFullUrl() }}"></single-uploader>
                </div>
            </div>
            @if($page->slug == 'book')
                <div class="mt-4">
                    <multi-uploader
                            :src="{{ json_encode(\App\Http\Resources\MediaResource::collection($page->getMedia('uploads'))) }}"></multi-uploader>
                </div>
            @endif

            <div class="mt-4">
                <button class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </section>

@endsection