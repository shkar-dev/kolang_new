<div class="content-list-buttons">
    <div class="list-button-item list-title">
        <h3>{{ $title }}</h3>
    </div>

    <div class="list-button-item">
        <button class="sort-button">
            Sort
            <i class="fa-solid fa-arrow-up-wide-short"></i>
        </button>
    </div>
    <div class="list-button-item">

        @if ($title == 'وانەبێژ')
            <a href="{{ route('admin.staff.add-lecturer') }}" class="sort-button" id="add-btn" wire:navigate>
                <i class="fa fa-plus"></i>
            </a>
        @else
            <a href="{{ route('admin.staff.add-writer') }}" class="sort-button" id="add-btn" wire:navigate>
                <i class="fa fa-plus"></i>
            </a>
        @endif
    </div>
    <div class="list-button-item">
        <button class="sort-button" type="button" id="filter">
            <i class="fa-solid fa-filter"></i>
        </button>
        <livewire:admin.staff.filter-modal :staffType="$title" />
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
            $('#filterbox').show()
        } else {
            check = !check;
            $(this).removeClass('active-sort-button')
            $('#filterbox').hide()
        }
    })
    $('#add-btn').on('click', function() {
        if (!check_add_btn) {
            check_add_btn = !check_add_btn;
            $(this).addClass('active-add-button')
        } else {
            check_add_btn = !check_add_btn;
            $(this).removeClass('active-add-button')
        }
    })
</script>
