@extends('layouts.client', ['page_title' => $page->title])

@section('content')

    <section class="mt-32 mb-12 container">
        <h1 class="text-5xl font-thin leading-none text-center  font-heading">
            <span>{{ $page->title }}</span>

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
        @if($page->video)
            <div class="flex flex-wrap -mx-8 mt-12 justify-center">
                <div class="w-full mb-4  mt-4">
                    <div class="video-feedback" data-youtube="{{$page->video}}"></div>
                </div>
            </div>
        @endif
        <div class="text-center mt-8">
            <button class="button button--primary modal-btn" data-modal-open="book-buy">
                @lang('pages.book.btn')
            </button>
        </div>

        @if($description)
            <div class="page-content mt-8 text-2xl">
                {!! $description[0] !!}
                @if(count($description)>=2)
                    {!! $description[1] !!}
                    @if(count($description)>=3)
                        <div class="page-content-item mb-4">
                            {!! $description[2] !!}
                        </div>
                    @endif
                @endif
            </div>
        @endif
        <div class="flex flex-wrap -mx-8  mb-4 justify-center">
            <a href="#" id="open-jobs-page-all" class="text-blue-200 text-3xl">More info</a>
        </div>


        <div class="flex flex-wrap -mx-8 mt-12 justify-center ">
            <div class="page-content mt-8 text-2xl">
                <h2 class="mb-4 text-center">Book review </h2>
                <h4 class="mb-2 mt-4 text-center">Kirill Rivkin (San Jose CA, USA)</h4>
                <p>Very impressive!</p>
                <p>The blades are mostly TJ with a relatively long provenance, which provides interesting background
                    regarding
                    the old papers, koshirae, alterations done etc.</p>
                <div class="review-one mb-5">
                    <p> Otherwise information is excessive, there is a hint of typical emphasis on lineages, as per
                        guesses
                        made
                        in Edo period, but the community does not seem to object to those...</p>
                    <p> But there is quite a lot on observations regarding the style changes during the foundation of
                        the
                        Soshu school,
                        kantei issues, and great wealth of information regarding the statistics on signatures, gathered
                        both
                        from
                        Juyo volumes and old publications.</p>
                    <p>The publication quality is simply above and beyond Dr. Honma's book, which includes the
                        photography.</p>

                    <p> The book is a very substantial improvement over Dr. Honma's. Markus Sesko did a very good job
                        with a
                        final edit; in the present form it is extremely impressive both in terms of analysis and objects
                        presented.
                        Detailed information about the Soshu school's early period, its reinterpretation and the
                        resulting
                        great
                        uncertainty with Soshu attributions - it actually gets more interesting towards the middle.</p>
                    <p> As good as private collections go without venturing into Kokuho territory. The praise can be
                        repeated on and on, but it is really worth to bite the (price, weight, convenience) bullet and
                        just
                        read it.</p>
                    <p> My personal interest here is anti-commercial - I myself ended up buying a significant number of
                        copies.</p>
                </div>
                <div class="flex flex-wrap -mx-8 -mt-8 mb-4 justify-center">
                    <a href="#" id="open-review-one" class="text-blue-200 text-3xl">Read more</a>
                </div>
                <h4 class="mb-2 mt-4 text-center">Darcy Brockbank (Montreal, Canada)</h4>
                <p>I reviewed the book in Japan with Kurokawa san (his comment: Sugoi!!) ...</p>

                <p>I have had early involvement with the book as Dmitri started writing it about 5 years ago and I laid
                    down the foundations for the photography as well as helping with the early research. Even knowing
                    what
                    was coming I was surprised at the huge size of the print. This is nice because very high resolution
                    photos I think with a Hasselblad scanning back (i.e. really non-casual photography equipment) were
                    done
                    over multiple pages which allows some close examination of the details of the blades.</p>
                <div class="review-two mb-5">
                    <p>In terms of the presence of the book not to mention the contents, it is just simply beautifully
                        laid
                        out
                        and done to what is the highest Japanese standards. Sanae Sakamoto who is a really great artist
                        did
                        the
                        calligraphy throughout the book as she did for me, and details like this are what makes it its
                        own
                        piece
                        of craftsmanship. I wrote the forward for this and one of the things I said is that until you
                        try to
                        make a book, you have no idea how hard it is to make a book. The details are so hard to nail
                        down
                        and
                        the higher your goals are it gets exponentially harder to accomplish. When you are mixing things
                        like
                        nihonto photography which is hard enough on its own, with high level book construction, and
                        getting
                        the
                        contents right, it's really something that is what it really was, five years of work for the
                        author.</p>

                    <p>Dmitry has quietly accumulated a hell of a great Soshu collection without getting high up on the
                        radar
                        and has a few things that are not present in even top level Japanese collections.</p>

                    <p>The price may seem high but the book is massive and just the printing cost alone of such a thing
                        is
                        pretty much what the list price is. It's not something made for profit but is entirely a labor
                        of
                        love
                        on behalf of the author.</p>
                </div>
                <div class="flex flex-wrap -mx-8 -mt-6 mb-4 justify-center">
                    <a href="#" id="open-review-two" class="text-blue-200 text-3xl">Read more</a>
                </div>
                <h4 class="mb-2 mt-4 text-center">Emilio Arroyes Rodriguez (Barcelona, Spain) </h4>
                <p>I'm just going to say that this book is one of the best books I've ever had. I received it today, it
                    is a very beautiful work, design and quality are supreme. I can study the swords almost as if they
                    were in my hand. A real work of art.</p>

                <h4 class="mb-2 mt-4 text-center">Brian Robinson (Johannesburg, South Africa)</h4>
                <p>I recently received my copy of the book too and plan on doing a full review once I get a chance to
                    really sit down and absorb more of it.</p>
                <div class="review-three mb-5">
                    <p>But what I can say from spending some time with it, is that it is an incredible book. Don't
                        expect
                        some
                        thin lightweight coffee-table book here. This is HUGE. Weight is over 5kg of amazing photography
                        and
                        information. I thought it would have been full of pictures and little info, but each sword comes
                        with a
                        huge amount of information, similar to Darcy's write-ups on his swords.</p>
                    <p>It is a BIG book, and oozes class from the paper used to the binding and slipcase. Everything has
                        been
                        done to showcase the best of the best. Which is what it contains. Some of the finest swords you
                        could
                        imagine.</p>
                    <p>Can't recommend this highly enough. This is destined to be a collector’s item in itself, and is
                        the
                        next
                        best thing to having the swords in hand. You will be able to see each sword in minute detail.
                        Nothing is
                        as good as having a sword in hand, but if that is not possible, this is a close second.</p>
                    <p>I know it is not cheap. But once you have it, you will know why and never feel like you
                        overspent. My
                        honest opinions are here. Well done Dmitry! World class!</p>
                </div>
                <div class="flex flex-wrap -mx-8 -mt-4 mb-4 justify-center">
                    <a href="#" id="open-review-three" class="text-blue-200 text-3xl">Read more</a>
                </div>

                <h4 class="mb-2 mt-4 text-center">Ted Tenold (Montana, October 2019)</h4>
                <p>Japanese Swords Soshu-Den Masterpieces is the result of what can only be defined as a herculean
                    effort to share with the reader the results of a passionate quest to assemble what is arguably one
                    of the world's foremost collections of the most highly coveted masterworks in the history of
                    Nihonto. In his book, Dmitry Pechalov affords us a view of his dedication as a collector, his
                    discernment as a connoisseur, and his unwaivering spirit as an author.</p>
                <div class="review-four mb-5">
                    <p> This comprehensive collection of Soshu masterpieces is presented with detailed historic
                        backgrounds,
                        and meticulous research gathered from an impressive array of historic records, contemporary
                        resources, and respected scholars. Furthermore, they are illustrated in superlative photographic
                        images that reveal the width and depth of spectacular details for which Soshu master swordsmiths
                        were so appropriately revered.</p>
                    <p>The swords exhibited in Japanese Swords Soshu-Den Masterpieces exemplify the very essence of why
                        we
                        collect and study. Their provenance becomes the voice that whispers their stories to us, and
                        connects us with the past through the romance of time. The beauty of a collection is illuminated
                        when it is shared with others in fellowship. Mr. Pechalov has made the consummate effort to
                        share
                        his collection with us, and in doing so, enables us to share in the appreciation and enjoyment
                        of
                        the resplendent Soshu tradition.</p>
                </div>
                <div class="flex flex-wrap -mx-8 -mt-2 mb-4 justify-center">
                    <a href="#" id="open-review-four" class="text-blue-200 text-3xl">Read more</a>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-8 mt-12 justify-center">
            {{--@foreach($page->getMedia('uploads') as $media)
                <p class="mb-8">
                    <a data-fancybox="gallery" href="{{ $media->getFullUrl() }}">
                        <img data-src="{{ $media->getFullUrl() }}" class="lozad max-h-screen" alt="">
                    </a>
                </p>
            @endforeach
            @foreach($page->getMedia('uploads') as $media)
                <div class="teaser-wrapper w-full lg:w-1/3 mb-6">
                    <article class="teaser section-teaser">
                        <figure class="lozad teaser__thumbnail"
                                data-background-image="{{ $media->getFullUrl() }}"></figure>
                    </article>
                </div>
            @endforeach--}}
            @foreach($page->getMedia('uploads') as $media)
                <div class="teaser-wrapper w-full lg:w-1/3 mb-6">
                    <a data-fancybox="images" href="{{ $media->getFullUrl() }}">
                        <article class="teaser section-teaser">

                            <div class="lozad teaser__thumbnail"
                                 data-background-image="{{ $media->getFullUrl() }}">
                            </div>

                        </article>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-8">
            <button class="button button--primary modal-btn" data-modal-open="book-buy">
                @lang('pages.book.btn')
            </button>
        </div>
        @include('client.pages.modal')
    </section>

@endsection
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endpush