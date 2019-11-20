<section class="pb-5 lg:pb-10">
    <h2 class="text-center text-3xl my-12 relative z-20 relative font-heading ">
        <span>{{ __('nav.blog') }}</span>

        <div class="title-decoration inset-x-0 mx-auto w-40">
            @foreach(range(1, 5) as $row)
                <div class="w-full flex justify-center my-2" style="opacity: {{ 1.2 - $loop->iteration * 0.2 }}">
                    @foreach(range(0, rand(6, 12)) as $col)
                        <div class="w-1 h-1 bg-purple-500 mx-1 rounded-full"></div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </h2>

    <div class="flex flex-wrap">
        @each('partials.client.blog.teaser', $posts, 'blogPost')
    </div>

    <div class="container text-center mt-8">
        <a href="{{ route('client.blog.index') }}"
           class="button button--primary">{{ __('pages.blog.all') }}</a>
    </div>
</section>