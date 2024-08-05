<div class="form-floating  ">
    <input type='text' name="{{ $name }}"
        class="form-control custom-input form-control-sm  @error('input') input-text-invalid @enderror"
        id="{{ $name . 'id' }}" placeholder="name@example.com" value="{{ $content }}">
    <label for="floatingInput" class="control-label invalid-label">{{ $title }}</label>
    @error($name)
        <div class="row px-3">
            <p class="input-invalid-text">تکایە {{ $title }} تۆمار بکە </p>
        </div>
    @enderror

</div>
