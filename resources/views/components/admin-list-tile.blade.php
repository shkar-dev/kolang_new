<div class="list-tile-container">
    @foreach ($this->users as $user)
        <div class="list-tile-item">
            <div class="phone tile-section">
                {{ $user['subject'] }}
                <span>{{$user['type']}}</span>
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
    @endforeach
</div>
