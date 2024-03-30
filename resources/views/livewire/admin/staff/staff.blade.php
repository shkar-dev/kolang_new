
<div >
    <div class="content-list-buttons">
        <div class="list-button-item list-title">
            <h3>ستاف</h3>
        </div>

        <div class="list-button-item">
            <button class="sort-button">
                Sort
                <i class="fa-solid fa-arrow-up-wide-short"></i>
            </button>
        </div>
        <div class="list-button-item">
            <a href="{{route('admin.staff.add-writer')}}" class="sort-button" id="add-btn"   wire:navigate>
                <i class="fa fa-plus"></i>
            </a>
        </div>
        <div class="list-button-item">
            <button class="sort-button" type="button"    id="filter">
                <i class="fa-solid fa-filter"></i>
            </button>
            <livewire:admin.staff.filter-modal :filter="['user'=>'learning']"/>
        </div>
    </div>
    <div class="admin-search-container">
        <div class="admin-search-input-container">
            <i class="fa fa-search"></i>
            <input class="admin-search" type="text"  placeholder="Search for anything ...">
        </div>
    </div>
    <div class="list-tile-container">
        @foreach($staff as $user)
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
</div>
    <script>
        $('#filterbox').hide();
        var check=false;
        var check_add_btn=false;
        $('#filter').on('click',function(){
            if(!check){
                canBeClosed=true;
                check=!check;
                $(this).addClass('active-sort-button')
                $('#filterbox').fadeIn()
            }else{
                check=!check;
                $(this).removeClass('active-sort-button')
                $('#filterbox').fadeOut()
            }
        })
        $('#add-btn').on('click',function(){
            if(!check_add_btn){
                check_add_btn=!check_add_btn;
                $(this).addClass('active-add-button')
                // $('#add-btn').fadeIn()
            }else{
                check_add_btn=!check_add_btn;
                $(this).removeClass('active-add-button')
                // $('#add-btn').fadeOut()
            }

        })
    </script>
</div>
