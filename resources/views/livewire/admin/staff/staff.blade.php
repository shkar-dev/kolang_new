<div>
    <x-staff-heading-section title="نووسەر" />
    <div class="admin-search-container">
        <div class="admin-search-input-container">
            <i class="fa fa-search"></i>
            <input class="admin-search" type="text" placeholder="Search for anything ...">
        </div>
    </div>
    {{-- <x-staff-list-tile :staff="$staff"/> --}}
    <div class="list-tile-container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('failed'))
            <div class="alert alert-danger">{{ session('failed') }}</div>
        @endif

        @foreach ($this->data as $item)
            <a class="list-tile-item" href="{{ route('admin.staff.edit-staff', $item['id']) }}">
                <div class="phone tile-section">
                    {{ $item['name'] }}
                    <span>{{ $item['academicLevel'] }}</span>
                </div>
                <div class="profile tile-section">
                    <div>
                        <img src="{{ asset('assets/images/person.jpg') }}" class="profile-img" />
                    </div>
                    {{ $item['mobile_1'] }}
                </div>
                <div class="date tile-section">
                    30 min
                </div>
                <x-delete-item-button :id="$item['id']" :routeName="route('admin.staff.delete-writer')" />

            </a>
        @endforeach
    </div>

</div>

</div>
