@extends('layouts.client', ['page_title' => __('common.header.search')])

@section('content')

    <section class="mt-32 mb-12 container">
        <h1 class="text-5xl font-thin leading-none text-center font-heading">
            <span>{{ __('common.header.search') }}: &laquo;{{ $query }}&raquo;</span>

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
    </section>

    <section class="my-12">
        <div class="exhibits grid">
            @each('partials.client.exhibits.teaser', $exhibits, 'exhibit', 'partials.client.layout.not-found')
        </div>

        @if ($exhibits->total() > 1)
            <div class="container mt-10">
                {{ $exhibits->links() }}
            </div>
        @endif
    </section>

@endsection