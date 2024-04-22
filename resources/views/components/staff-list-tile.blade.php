<div class="list-tile-container">
    @foreach($this->staff as $user)
        <div class="list-tile-item">
            <div class="phone tile-section">
                {{$user['name']}}
                <span>{{$user['dob']}}</span>
            </div>
            <div class="profile tile-section">
                <div>
                    <img src="{{asset('assets/images/person.jpg')}}" class="profile-img" />
                </div>
                {{$user['phone1']}}
            </div>
            <div class="date tile-section">
                {{$user['staff_type']}}
            </div>
            <div class="status tile-section">
                <span class="badge bg-primary">{{$user['education_level']}}</span>
            </div>
        </div>
    @endforeach
</div>
