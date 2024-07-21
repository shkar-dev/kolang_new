<div>
    <x-subscribers-heading-section title="بەشداربووان" isGeneral="false" />
    <div class="admin-search-container">
        <div class="admin-search-input-container">
            <i class="fa fa-search"></i>
            <input class="admin-search" type="text" placeholder="Search for anything ...">
        </div>
    </div>
    {{-- <x-admin-list-tile :users=" $users "/> --}}

    <div class="list-tile-container">
        @foreach ($this->data as $item)
            <a class="list-tile-item" href="{{ route('admin.subject.add-subject-form') }}">
                <div class="phone tile-section">
                    {{ $item['name'] }}
                    <span>{{ $item['type'] }}</span>
                </div>
                <div class="profile tile-section">
                    <div>
                        <img src="{{ asset('assets/images/person.jpg') }}" class="profile-img" />
                    </div>
                    {{ $item['mobile_1'] }}
                </div>
                <div class="date tile-section">
                    {{ $item['date_of_birth'] }}
                </div>
                <div class="status tile-section">
                    <span class="badge bg-primary">Primary</span>
                </div>
            </a>
        @endforeach
    </div>
</div>
