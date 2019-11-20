<footer class="pt-10 pb-4">
    <div class="container">
        <div class="text-center">
            <a href="{{ url('/') }}" class="inline-flex">
                <svg fill="#fff" width="240" height="120">
                    <use xlink:href="#logo"></use>
                </svg>
            </a>
        </div>

        <div class="mt-8 flex flex-wrap justify-center  max-w-full">
            @foreach(app('nav')->footer() as $footer_el)
                <div class="px-8 w-full md:w-1/2 lg:w-1/4 max-w-xs mb-8">
                    <h5 class="font-bold text-lg {{$loop->first ? 'mb-3': ''}}">
                        @if ($footer_el->link)
                            <a href="{{ $footer_el->link }}">{{ $footer_el->name }}</a>
                        @else
                            {{ $footer_el->name }}
                        @endif
                    </h5>
                    @if ($footer_el->children)
                        <ul class="list-reset">
                            @foreach($footer_el->children as $child)
                                @if(!isset($child->published)|| ($child->published && ( $child->published == 1)))
                                    <li>
                                        <a href="{{ $child->link }}">{{ $child->name }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endforeach
        </div>

        <hr class="border-b border-white opacity-25 my-4">

        <div class="text-center text-sm">
            &copy; {{ date('Y') }} {{ config('app.name') }}
        </div>
    </div>
</footer>