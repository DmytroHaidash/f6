<header class="app-header">
    <div class="logo self-start w-40 z-20">
        <a href="{{ url('/') }}" class="block">
            <svg fill="#fff" width="160" height="82">
                <use xlink:href="#logo"></use>
            </svg>
        </a>
    </div>

    <div class="w-20 flex items-center">
        {{--<div class="language-switcher px-3 ml-auto">
            {{ app()->getLocale() }}

            @php
                $locales = collect(config('app.locales'))->filter(function ($locale) {
                    return $locale != app()->getLocale();
                });
            @endphp

            <ul>
                @foreach($locales as $locale)
                    <li>
                        <a href="{{ url('/'.$locale) }}">{{ $locale }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
--}}
        <div class="search">
            <a href="#" data-show-search>
                <svg width="30" height="30" class="fill-current">
                    <use xlink:href="#search"></use>
                </svg>
            </a>
        </div>

        <div class="burger-menu">
            <div class="line line--top"></div>
            <div class="line line--middle"></div>
            <div class="line line--bottom"></div>
        </div>
    </div>

    <form action="{{ route('client.search.index') }}" method="post"
          class="search-panel absolute inset-x-0 top-0 flex items-center p-4 bg-gray-900 z-50"
          style="display: none">
        @csrf

        <input type="search" name="search" class="form-control text-lg h-12" autocomplete="nope"
               placeholder="{{ __('common.header.search') }}"
               value="{{ old('search') ?? $query ?? null }}" required>

        <button class="button button--primary h-12">
            <svg width="24" height="24" class="fill-current">
                <use xlink:href="#search"></use>
            </svg>
        </button>
    </form>

    <nav class="menu">
        <ul class="nav list-reset">
            @foreach(app('nav')->header() as $nav)
                @if(!isset($nav->published)|| ($nav->published && ( $nav->published == 1)) )
                    <li class="nav-item px-4">
                        <a href="{{ $nav->link ?? '#' }}" class="font-bold uppercase tracking-widest">
                            {{ $nav->name }}
                        </a>

                        @if (isset($nav->children) && count($nav->children))
                            <a href="{{ $nav->link ?? '#' }}" class="font-bold uppercase tracking-widest">
                                <svg width="12" height="11" class="fill-current ml-2 -mt-px inline-flex">
                                    <use xlink:href="#caret"></use>
                                </svg>
                            </a>
                            {{--<svg width="12" height="11" class="fill-current ml-2 -mt-px">
                                <use xlink:href="#caret"></use>
                            </svg>--}}

                            <div class="submenu leading-tight" style="display: none">
                                <ul class="list-reset">
                                    @foreach($nav->children as $child)
                                        {{--@if (!$loop->first)
                                            <li class="my-3">
                                                <hr class="border-b border-white opacity-25">
                                            </li>
                                        @endif--}}
                                        <li class="my-1 font-bold">
                                            <a href="{{ $child->link }}">
                                                {{ $child->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
    </nav>
</header>