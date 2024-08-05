<div class="form-floating ">
    <input type='datetime-local' name="{{ $name }}"
        class="form-control custom-input form-control-sm  @error('input') input-text-invalid @enderror  "
        id="floatingInput" placeholder="name@example.com" value="{{ $content }}">
    <label for="floatingInput">{{ $title }}</label>
    @error($name)
        <div class="row px-3">
            <p class="input-invalid-text">تکایە {{ $title }} تۆمار بکە </p>
        </div>
    @enderror

</div>
