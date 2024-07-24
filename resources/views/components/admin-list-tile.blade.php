<div class="list-tile-container">
    @foreach ($data as $item)
        <a class="list-tile-item" href="{{ route('admin.subject.add-subject-form') }}">
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
            <div class="status tile-section">

                <form action="" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item['id'] }}">
                    <button class="badge bg-danger" type="submit">delete</button>
                </form>

            </div>
        </a>
    @endforeach
</div>
