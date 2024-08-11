<div class="{{ $class }} p-2 ">
    <div class="   subscribers-item-container">
        <div class="subscriber-item-img " style="background-image: url('{{ asset('assets/images/person.jpg') }}')"></div>
        <p> {{ $content->name }}</p>
        <div class="">
            @if ($isCheckAvailable)
                <input type="checkbox" name="ids" class="checkbox_ids" id="" value="{{ $content->id }}" />
            @else
                <x-delete-item-button :id="$content->id" :parent="$id" :routeName="route('admin.course.delete-group-subscriber')" />
            @endif
        </div>
    </div>
</div>
