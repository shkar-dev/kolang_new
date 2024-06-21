<div class="sidebar-container">
    <div class="iconbar">
        <div style="position: relative">
            <div class="iconbar-icon">
                <img src="{{ asset('assets/images/logo-white.png') }}">
            </div>
            <div
                class="iconbar-icon subject-icon {{ preg_match('(learning|education|society|ethics|article|add-subject|general)', request()->getPathInfo()) ? ' icon-bar-active-rtl' : '' }}">
                <div>
                    <span class="material-symbols-outlined">
                        subject
                    </span>
                </div>
                <p >بابەت</p>
            </div>
            <div class="iconbar-icon course-icon course-icon {{ preg_match('(course|group|subscriber)', request()->getPathInfo()) ? ' icon-bar-active-rtl' : '' }} ">
                <div>
                    <i class="fa-solid fa-video"></i>
                </div>
                <p>وانە</p>
            </div>
            <div
                class="iconbar-icon people-icon people-icon {{ preg_match('(writer|translator|lecturer)', request()->getPathInfo()) ? ' icon-bar-active-rtl' : '' }}">
                <div>
                    <i class="fa-solid fa-user-group"></i>
                </div>
                <p>ستاف</p>
            </div>

            <div class="iconbar-icon setting-icon  {{ preg_match('(documents|edu_level)', request()->getPathInfo()) ? ' icon-bar-active-rtl' : '' }}">
                <div>
                    <i class="fa-solid fa-gear"></i>
                </div>
                <p>ڕێکخستن</p>
            </div>
            <a class="iconbar-icon setting-icon" style="position:absolute;text-decoration:none; bottom:30px; "  href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                <div>
                    <i class="fa fa-power-off"></i>
                </div>
                <p>دەرچوون</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>


    </div>
    <div class="menubar">
        <div>
            <div class="menubar-icons">
                <x-dashboard-tile icon="fa fa-plus"  inner-route-direction="{{route('admin.subject.add-subject-form')}}"  is-icon-needed="true"  cssClass=" subject-item  {{    str_contains(request()->getPathInfo(), 'general') ? 'menubar-item-active' : '' }}"   routeDirection="{{ route('admin.subject.subjectGeneral') }}"  text="گشتی" />
                <x-dashboard-tile icon="fa fa-plus"  inner-route-direction="{{route('admin.subject.add-subject-form')}}" is-icon-needed="true"  cssClass=" subject-item  {{    str_contains(request()->getPathInfo(), 'education') ? 'menubar-item-active' : '' }}"   routeDirection="{{ route('admin.subject.education') }}"  text="پەروەردە" />
                <x-dashboard-tile icon="fa fa-plus"  inner-route-direction="{{route('admin.subject.add-subject-form')}}" is-icon-needed="true"  cssClass=" subject-item  {{    str_contains(request()->getPathInfo(), 'learning') ? 'menubar-item-active' : '' }}"   routeDirection="{{ route('admin.subject.learning') }}"  text="فێربوون" />
                <x-dashboard-tile icon="fa fa-plus"  inner-route-direction="{{route('admin.subject.add-subject-form')}}" is-icon-needed="true"  cssClass=" subject-item  {{    str_contains(request()->getPathInfo(), 'society') ? 'menubar-item-active' : '' }}"   routeDirection="{{ route('admin.subject.society') }}"  text="کۆمەڵگە" />
                <x-dashboard-tile icon="fa fa-plus"  inner-route-direction="{{route('admin.subject.add-subject-form')}}" is-icon-needed="true"  cssClass=" subject-item  {{    str_contains(request()->getPathInfo(), 'ethics') ? 'menubar-item-active' : '' }}"   routeDirection="{{ route('admin.subject.ethics') }}"  text="ئەخلاق" />
                <x-dashboard-tile icon="fa fa-plus"  inner-route-direction="{{route('admin.subject.add-subject-form')}}" is-icon-needed="true"  cssClass=" subject-item  {{    str_contains(request()->getPathInfo(), 'article') ? 'menubar-item-active' : '' }}"   routeDirection="{{ route('admin.subject.article') }}"  text="وتار" />

                <x-dashboard-tile icon="fa fa-plus"  inner-route-direction="{{route('admin.course.course')}}" is-icon-needed="true"  cssClass=" course-item   {{    str_contains(request()->getPathInfo(), 'course') ? 'menubar-item-active' : '' }}"   routeDirection="{{ route('admin.course.course-list') }}"  text="کۆرس" />
                <x-dashboard-tile icon="fa fa-plus"  inner-route-direction="{{route('admin.course.group')}}" is-icon-needed="true"  cssClass=" course-item   {{    str_contains(request()->getPathInfo(), 'group') ? 'menubar-item-active' : '' }}"   routeDirection="{{ route('admin.course.group-list') }}"  text="گروپ" />
                <x-dashboard-tile icon="fa fa-plus"  inner-route-direction="{{route('admin.course.subscribers')}}" is-icon-needed="true"  cssClass=" course-item   {{    str_contains(request()->getPathInfo(), 'subscriber') ? 'menubar-item-active' : '' }}"   routeDirection="{{ route('admin.course.subscriber-list') }}"  text="بەشداربووان" />

                <div class="menubar-item  people-item ">
                    <a>گشتی</a>
                </div>
                <x-dashboard-tile icon="fa fa-plus"  inner-route-direction="{{route('admin.staff.add-writer')}}" is-icon-needed="true"  cssClass=" people-item   {{    str_contains(request()->getPathInfo(), 'writer') ? 'menubar-item-active' : '' }}"   routeDirection="{{ route('admin.staff.writer') }}"  text="نووسەر" />
                <x-dashboard-tile icon="fa fa-plus"  inner-route-direction="{{route('admin.staff.add-writer')}}" is-icon-needed="true"  cssClass=" people-item   {{    str_contains(request()->getPathInfo(), 'translator') ? 'menubar-item-active' : '' }}"   routeDirection="{{ route('admin.staff.translator') }}"  text="وەرگێڕ" />
                <x-dashboard-tile icon="fa fa-plus"  inner-route-direction="{{route('admin.staff.add-lecturer')}}" is-icon-needed="true"  cssClass=" people-item   {{    str_contains(request()->getPathInfo(), 'lecturer') ? 'menubar-item-active' : '' }}"   routeDirection="{{ route('admin.staff.lecturer') }}"  text="وانەبێژ" />

                <div class="menubar-item  setting-item ">
                    <a>بەکارهێنەر</a>
                </div>
                <div class="menubar-item  setting-item ">
                    <a>دەسەڵاتەکان</a>
                </div>
                <x-dashboard-tile icon="fa fa-plus"  cssClass=" setting-item  {{    str_contains(request()->getPathInfo(), 'documents') ? 'menubar-item-active' : '' }}"   routeDirection="{{ route('admin.setting.document') }}"  text="بەڵگەنامەکان" />
                <x-dashboard-tile icon="fa fa-plus"  cssClass=" setting-item  {{    str_contains(request()->getPathInfo(), 'edu_level') ? 'menubar-item-active' : '' }}"   routeDirection="{{ route('admin.setting.education-level') }}"  text="ئاستی زانستی" />
            </div>
        </div>
    </div>
    <script>
        {{-- if("{{explode('.',Route::currentRouteName(),)[1] == 'staff'}}"){ --}}
        {{--    alert('aa') --}}
        {{--    $('.menubar-icons').children().hasClass('people-item').show(); --}}
        {{--    $('.menubar-icons').children().hasClass(':not(.people-item)').hide(); --}}
        {{-- } --}}

        $('.iconbar-icon').on('click', function() {
            $('.iconbar-icon').removeClass('icon-bar-active-rtl');
            $(this).addClass(' icon-bar-active-rtl');
            $(this).find('.sidenav-bridge').addClass('move-bridge')
        })
    </script>

{{--    <script> --}}
{{--    left to right menu active --}}
{{--        $('.iconbar-icon').on('click',function(){ --}}
{{--            $('.iconbar-icon').removeClass('icon-bar-active'); --}}
{{--            $(this).addClass(' icon-bar-active'); --}}
{{--            $(this).find('.sidenav-bridge').addClass('move-bridge') --}}
{{--        }) --}}
{{--    </script> --}}
    <script>
        var iconbar_icon = document.querySelectorAll('.iconbar-icon');
        var menuber_item = document.querySelectorAll('.menubar-item');
        menuber_item.forEach(item => {
            if ("{{ explode('.', Route::currentRouteName())[1] == 'staff' }}") {
                if (!item.classList.contains('people-item')) {
                    item.style.display = 'none'
                }
            }
            if ("{{ explode('.', Route::currentRouteName())[1] == 'subject' }}") {
                if (!item.classList.contains('subject-item')) {
                    item.style.display = 'none'
                }
            }
            if ("{{ explode('.', Route::currentRouteName())[1] == 'setting' }}") {
                if (!item.classList.contains('setting-item')) {
                    item.style.display = 'none'
                }
            }
            if ("{{ explode('.', Route::currentRouteName())[1] == 'course' }}") {
                if (!item.classList.contains('course-item')) {
                    item.style.display = 'none'
                }
            }
            {{-- else if({{explode('.',Route::currentRouteName())[1] == 'subject'}}){ --}}
            {{--    if(!item.classList.contains('subject-item')){ --}}
            {{--        item.style.display='none' --}}
            {{--    } --}}
            {{-- }else if({{explode('.',Route::currentRouteName())[1] == 'setting'}}){ --}}
            {{--    if(!item.classList.contains('setting-item')){ --}}
            {{--        item.style.display='none' --}}
            {{--    } --}}
            {{-- if({{explode('.',Route::currentRouteName())[1] == 'subject'}}){ --}}
            {{--    if(!item.classList.contains('subject-item')){ --}}
            {{--        item.style.display='none' --}}
            {{--    } --}}
            {{-- } --}}

        })
        iconbar_icon.forEach(item => {
            item.addEventListener('click', function(e) {
                if (item.classList.contains('subject-icon')) {
                    menuber_item.forEach(item => {
                        if (item.classList.contains('subject-item')) {
                            item.style.display = 'flex'
                        } else {
                            item.style.display = 'none'
                        }
                    })
                } else if (item.classList.contains('course-icon')) {
                    menuber_item.forEach(item => {
                        if (item.classList.contains('course-item')) {
                            item.style.display = 'flex'
                        } else {
                            item.style.display = 'none'
                        }
                    })
                } else if (item.classList.contains('people-icon')) {
                    menuber_item.forEach(item => {
                        if (item.classList.contains('people-item')) {
                            item.style.display = 'flex'
                        } else {
                            item.style.display = 'none'
                        }
                    })
                } else {
                    menuber_item.forEach(item => {
                        if (item.classList.contains('setting-item')) {
                            item.style.display = 'flex'
                        } else {
                            item.style.display = 'none'
                        }
                    })
                }
                // var menubar_icons = document.getElementsByClassName('menubar-icons')[0];
                // menubar_icons.classList.add('menubar-item-active');
            })
        })
    </script>
</div>
