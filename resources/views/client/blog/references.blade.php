@extends('layouts.client', ['page_title' => __('nav.references')])

@section('content')

    <h1 hidden>{{ __('nav.references') }}</h1>

    <section class="mt-32 mb-12">
        <div class="container">
            <h1 class="text-3xl leading-none mb-8  font-heading text-center">
                <span>{{ __('nav.references') }}</span>

                <div class="title-decoration inset-x-0 mx-auto w-40">
                    @foreach(range(1, 5) as $row)
                        <div class="w-full flex justify-center my-2" style="opacity: {{ 1.2 - $loop->iteration * 0.2 }}">
                            @foreach(range(0, rand(6, 12)) as $col)
                                <div class="w-1 h-1 bg-purple-500 mx-1 rounded-full"></div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </h1>


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