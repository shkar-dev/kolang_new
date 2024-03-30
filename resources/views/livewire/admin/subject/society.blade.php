<div>
    <x-heading-section title="کۆمەڵگە" />
    <div class="admin-search-container">
        <div class="admin-search-input-container">
            <i class="fa fa-search"></i>
            <input class="admin-search" type="text" placeholder="Search for anything ...">
        </div>
    </div>
    <div class="list-tile-container">
        {{-- @foreach ($users as $user)
            <div class="list-tile-item">
                <div class="phone tile-section">
                    {{ $user['subject'] }}
                    <span>12 Feb</span>
                </div>
                <div class="profile tile-section">
                    <div>
                        <img src="{{ asset('assets/images/person.jpg') }}" class="profile-img" />
                    </div>
                    {{ $user['nusar'] }}
                </div>
                <div class="date tile-section">
                    30 min
                </div>
                <div class="status tile-section">
                    <span class="badge bg-primary">Primary</span>
                </div>
            </div>
        @endforeach --}}
    </div>
</div>
{{-- <script>
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
</script> --}}
