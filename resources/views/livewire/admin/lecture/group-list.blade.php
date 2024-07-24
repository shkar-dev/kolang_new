<div>
    <x-group-heading-section title="گروپ" isGeneral="false" />
    <div class="admin-search-container">
        <div class="admin-search-input-container">
            <i class="fa fa-search"></i>
            <input class="admin-search" type="text" placeholder="Search for anything ...">
        </div>
    </div>
    {{-- <x-admin-list-tile :users=" $users "/> --}}

    <div class="list-tile-container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('failed'))
            <div class="alert alert-danger">{{ session('failed') }}</div>
        @endif
        @foreach ($this->data as $item)
            <a class="list-tile-item" href="{{ route('admin.subject.add-subject-form') }}">
                <div class="phone tile-section">
                    {{ $item['supervisorName'] }}
                    <span>{{ $item['memberName'] }}</span>
                </div>
                <div class="profile tile-section">
                    <div>
                        <img src="{{ asset('assets/images/person.jpg') }}" class="profile-img" />
                    </div>
                    {{ $item['name'] }}
                </div>
                <div class="date tile-section">
                    {{ $item['price'] }}
                </div>
                <x-delete-item-button :id="$item['id']" :routeName="route('admin.course.delete-group')" />
            </a>
        @endforeach
    </div>

</div>
