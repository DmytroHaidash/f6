<div class="custom-modal" id="book-buy">

    <div class="custom-modal--close">
        <svg width="24" height="24" class="fill-current">
            <use xlink:href="#close"></use>
        </svg>
    </div>

    <h5 class="text-2xl text-center mb-5">@lang('pages.book.btn') </h5>
    <form action="{{route('client.order')}}" method="post">
        @csrf

        <div class="mb-5">
            <label for="name" class="block font-bold uppercase text-xs mb-2">@lang('pages.book.name')</label>
            <input type="text" class="form-control @error('name') border-red @enderror" id="name" name="name"
                   value="{{ old('name') }}" required>
            @error('name')
            <div class="text-red" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="contact" class="block font-bold uppercase text-xs mb-2">@lang('pages.book.contact')</label>
            <input type="text" class="form-control @error('contact') border-red @enderror" id="contact" name="contact"
                   value="{{ old('contact') }}" required>
            @error('contact')
            <div class="text-red" role="alert">
                <strong>{{ $errors->first('contact') }}</strong>
            </div>
            @enderror
        </div>

        <button class="button button--primary">@lang('pages.book.buy')</button>
    </form>
</div>

<div class="custom-modal-mask"></div>