@extends('layouts.client', ['page_title' => __('nav.exhibitions')])

@section('content')

    <section class="mt-32 mb-12 container text-center">
        <h1 class="text-5xl font-thin leading-none mb-12 font-heading">
            <span>{{ __('nav.exhibitions') }}</span>

            <div class="title-decoration inset-x-0 mx-auto w-40">
                @foreach(range(1, 5) as $row)
                    <div class="w-full flex justify-center my-2" style="opacity: {{ 1.2 - $loop->iteration * 0.2 }}">
                        @foreach(range(0, rand(6, 12)) as $col)
                            <div class="w-1 h-1 bg-indigo-500 mx-1 rounded-full"></div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </h1>

        @includeWhen($years->count(), 'partials.client.exhibitions.filter')
    </section>

    <section class="my-12">
        <div class="flex flex-wrap justify-center">
            @each('partials.client.exhibitions.teaser', $exhibitions, 'exhibition', 'partials.client.layout.not-found')
        </div>
    </section>

@endsection