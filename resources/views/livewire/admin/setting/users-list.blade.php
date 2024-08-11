@extends('components.layouts.app')
@section('section')
    <div>
        <x-group-heading-section title="گروپ" isGeneral="false" />
        <div class="admin-search-container">
            <div class="admin-search-input-container">
                <i class="fa fa-search"></i>
                <input class="admin-search" type="text" placeholder="Search for anything ...">
            </div>
        </div>

        <div class="list-tile-container">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('failed'))
                <div class="alert alert-danger">{{ session('failed') }}</div>
            @endif
            @foreach ($data as $item)
                <a class="list-tile-item" href="{{ route('admin.setting.edit-user', $item['id']) }}">
                    <div class="phone tile-section">
                        {{ $item['username'] }}
                        <span>{{ $item['email'] }}</span>
                    </div>
                    <div class="profile tile-section">
                        <div>
                            {{-- <img src="{{ asset('assets/images/person.jpg') }}" class="profile-img" /> --}}
                        </div>
                        {{ $item['mobile'] }}
                    </div>

                    <x-delete-item-button :id="$item['id']" :routeName="route('admin.setting.delete-user')" />
                </a>
            @endforeach
        </div>

    </div>
@endsection
