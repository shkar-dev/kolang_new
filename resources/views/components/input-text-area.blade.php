<div class="form-floating ">
    <textarea name="{{ $name }}" rows="6"
        class="form-control custom-input @error('input') input-text-invalid @enderror  " id="floatingInput"
        placeholder="name@example.com" style="height: auto;resize:none;">{{ $content }}
    </textarea>
    <label for="floatingInput">{{ $title }}</label>
    @error($name)
        <div class="row">
            <p class="input-invalid-text">تکایە {{ $title }} تۆمار بکە </p>
        </div>
    @enderror
</div>
