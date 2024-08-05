<div>
    <x-heading-section title="ئەخلاق" isGeneral="false" />
    <div class="admin-search-container">
        <div class="admin-search-input-container">
            <i class="fa fa-search"></i>
            <input class="admin-search" type="text" placeholder="Search for anything ...">
        </div>
    </div>
    {{-- <x-admin-list-tile :users="$users"/> --}}

    <div class="list-tile-container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @foreach ($this->data as $item)
            <a class="list-tile-item" href="{{ route('admin.subject.edit-subject', $item['articleId']) }}">
                <div class="phone tile-section">
                    {{ $item['subjectName'] }}
                    <span>{{ $item['writer'] }}</span>
                </div>
                <div class="profile tile-section">
                    <div>
                        <img src="{{ asset('assets/images/person.jpg') }}" class="profile-img" />
                    </div>
                    {{ $item['translator'] }}
                </div>
                <div class="date tile-section">
                    30 min
                </div>
                <x-delete-item-button :id="$item['subject_id']" :routeName="route('admin.subject.delete-subject')" />
            </a>
        @endforeach
    </div>
</div>
