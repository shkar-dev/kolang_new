<div class="form-floating ">
    <textarea name="{{ $name }}" rows="6" class="form-control custom-input @error('input') input-text-invalid @enderror  " id="floatingInput"
        placeholder="name@example.com" style="height: auto;resize:none;"></textarea>
    <label for="floatingInput">{{ $title }}</label>
    @if(1==2)
    <div class="row px-3"><p class="input-invalid-text">تکایە ناو تۆمار بکە </p></div>
    @endif
</div>
