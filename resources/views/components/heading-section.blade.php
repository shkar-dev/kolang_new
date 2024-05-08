<div class="heading-section-buttons">
    <div class="list-button-item list-title">
        <h3>{{ $title }}</h3>
    </div>
    {{-- <div class="list-button-item list-switch">
        Transcribed
        <label class="switch">
            <input type="checkbox" checked>
            <span class="slider round"></span>
        </label>
    </div> --}}
    <div class="list-button-item">
        <button class="sort-button">
            <i class="fa-solid fa-arrow-up-wide-short"></i>
        </button>
    </div>
    <div class="list-button-item">
        <a href="{{ route('admin.subject.add-subject-form') }}" class="sort-button" id="add-btn" type="button"
            data-bs-toggle="modal" data-bs-target="#staticBackdrop" wire:navigate>
            <i class="fa fa-plus"></i>
        </a>
    </div>
    <div class="list-button-item">
        <button class="sort-button" type="button" id="filter">
            <i class="fa-solid fa-filter"></i>
        </button>

        <livewire:admin.subject.filter-modal :subjectType="$title" :isGeneral="$isGeneral"/>
    </div>
</div>
<script>
    $('#filterbox').hide();
    var check = false;
    var check_add_btn = false;

    $('#filter').on('click', function() {
        if (!check) {
            canBeClosed = true;
            check = !check;
            $(this).addClass('active-sort-button')
            $('#filterbox').fadeIn()
        } else {
            check = !check;
            $(this).removeClass('active-sort-button')
            $('#filterbox').fadeOut()
        }
    })

    $('#add-btn').on('click', function() {
        if (!check_add_btn) {
            check_add_btn = !check_add_btn;
            $(this).addClass('active-add-button')
            // $('#add-btn').fadeIn()
        } else {
            check_add_btn = !check_add_btn;
            $(this).removeClass('active-add-button')
            // $('#add-btn').fadeOut()
        }

    })
</script>
