@extends('layouts.client', ['page_title' => __('nav.collection')])

@section('content')

    <h1 hidden>{{ __('nav.collection') }}</h1>

    <section class="mt-32 mb-12">
        <div class="container">
            <h1 class="text-3xl leading-none mb-8 font-heading text-center">
                <span>{{ __('nav.collection') }}</span>

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

   @include('client.home.partials.sections')

@endsection