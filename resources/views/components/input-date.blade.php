<div class="form-floating ">
    <input type='date' name="{{ $name }}" class="form-control custom-input form-control-sm  @error('input') input-text-invalid @enderror  " id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">{{ $title }}</label>
    @if(1==2)
    <div class="row px-3"><p class="input-invalid-text">تکایە ناو تۆمار بکە </p></div>
    @endif
</div>
