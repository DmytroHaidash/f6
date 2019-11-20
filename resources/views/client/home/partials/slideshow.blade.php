<section class="slideshow">
    <div class="max-w-lg text-white z-30" id="intro" style="display: none">
        <img src="{{ asset('images/img.jpg') }}" alt="">

        <a href="{{ url('/book') }}">
            <h1 class="text-4xl leading-none mb-4">{{ __('nav.book') }}</h1>
            <blockquote class="font-serif italic text-xl leading-tight">{{ __('common.intro.quote') }}</blockquote>
        </a>

        <svg width="20" height="20" fill="#fff" class="close cursor-pointer absolute top-0 right-0 m-4">
            <use xlink:href="#close"></use>
        </svg>
    </div>

    <div class="slides slides--images">
        <div class="slide slide--current">
            <figure class="slide__img" style="background-image: url({{ asset('images/banner_main.jpg') }});"></figure>
            <div class="slide__title">
                <svg fill="#fff" class="slide__title-logo">
                    <use xlink:href="#logo"></use>
                </svg>
            </div>
            <div class="slide__desc" hidden></div>
            <div class="slide__link" hidden></div>
        </div>
        <div class="slide">
            <figure class="slide__img" style="background-image: url({{ asset('images/img.jpg') }});"></figure>
            <h2 class="slide__title font-heading">{{ __('nav.book') }}</h2>
            <div class="slide__desc" hidden></div>
            <div class="slide__link">
                <a href="{{ route('client.book') }}" class="button button--primary">
                    {{ __('nav.book') }}
                </a>
            </div>
        </div>
        @foreach($sections as $section)
            <div class="slide">
                <figure class="slide__img"
                        style="background-image: url({{ optional($section->getFirstMedia('cover'))->getFullUrl('banner') }});">
                </figure>

                <h2 class="slide__title font-heading">{{ $section->title }}</h2>
                <p class="slide__desc">{{ $section->description }}</p>
                <div class="slide__link mt-6">
                    <a href="{{ route('client.collection.index', $section) }}" class="button button--primary">
                        {{ __('pages.sections.visit') }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <nav class="slidenav text-white hidden lg:block">
        <button class="slidenav__item slidenav__item--prev">{{ __('nav.previous') }}</button>
        <span>/</span>
        <button class="slidenav__item slidenav__item--next">{{ __('nav.next') }}</button>
    </nav>
</section>