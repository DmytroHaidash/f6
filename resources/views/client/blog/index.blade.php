@extends('layouts.client', ['page_title' => __('nav.blog') . ($current ? ' &mdash; ' . $current->title : '')])

@section('content')

    <h1 hidden>{{ __('nav.blog') }}</h1>

    <section class="mt-32 mb-12">
        <div class="container">
            <h1 class="text-3xl leading-none mb-8 font-heading text-center">
                <span>{{ __('nav.blog') }}</span>

                <div class="title-decoration inset-x-0 mx-auto w-40 h-16"></div>
            </h1>

            <div class="flex flex-wrap justify-center">
                @foreach($categories as $category)
                    <a href="{{ route('client.blog.index', ['category' => $category->slug]) }}"
                       class="mx-px button button--primary{{ request('category') == $category->slug ? '' : '-outline' }}">
                        {{ $category->title }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="flex flex-wrap justify-center">
            @each('partials.client.blog.teaser', $posts, 'blogPost', 'partials.client.layout.not-found')
        </div>

        @if ($posts->total() > 1)
            <div class="container mt-10">
                {{ $posts->appends(request()->except('page'))->links() }}
            </div>
        @endif
    </section>

@endsection