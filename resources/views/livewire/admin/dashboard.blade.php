<div class="sidebar-container">
    <div class="iconbar">
        <div style="position: relative">
            <div class="iconbar-icon">
                <img src="{{ asset('assets/images/logo-white.png') }}">
            </div>
            <div
                class="iconbar-icon subject-icon {{ preg_match('(learning|education|society|ethics|article)', request()->getPathInfo()) ? ' icon-bar-active-rtl' : '' }}">
                <div>
                    <span class="material-symbols-outlined">
                        subject
                    </span>
                </div>
                <p >بابەت</p>
            </div>
            <div class="iconbar-icon course-icon course-icon  ">
                <div>
                    <i class="fa-solid fa-video"></i>
                </div>
                <p>وانە</p>
            </div>
            <div
                class="iconbar-icon people-icon people-icon {{ preg_match('(writer|writer1)', request()->getPathInfo()) ? ' icon-bar-active-rtl' : '' }}">
                <div>
                    <i class="fa-solid fa-user-group"></i>
                </div>
                <p>ستاف</p>
            </div>

            <div class="iconbar-icon setting-icon  {{ preg_match('(documents|document1)', request()->getPathInfo()) ? ' icon-bar-active-rtl' : '' }}">
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
                <a class="menubar-item  subject-item {{ str_contains(request()->getPathInfo(), 'general') ? 'menubar-item-active' : '' }}"
                   href="{{ route('admin.subject.subjectGeneral') }}" wire:navigate>
                    <p>گشتی</p>
                </a>
                <a class="menubar-item  subject-item {{ str_contains(request()->getPathInfo(), 'education') ? 'menubar-item-active' : '' }}"
                    href="{{ route('admin.subject.education') }}" wire:navigate>
                    <p>پەروەردە</p>
                </a>
                <a class="menubar-item  subject-item {{ str_contains(request()->getPathInfo(), 'learning') ? 'menubar-item-active' : '' }}"
                    href="{{ route('admin.subject.learning') }}" wire:navigate>
                    <p>فێربوون</p>
                </a>
                <a class="menubar-item  subject-item {{ str_contains(request()->getPathInfo(), 'society') ? 'menubar-item-active' : '' }}"
                    href="{{ route('admin.subject.society') }}" wire:navigate>
                    <p>کۆمەڵگە</p>
                </a>
                <a class="menubar-item  subject-item {{ str_contains(request()->getPathInfo(), 'ethics') ? 'menubar-item-active' : '' }}"
                    href="{{ route('admin.subject.ethics') }}" wire:navigate>
                    <p>ئەخلاق</p>
                </a>
                <a class="menubar-item  subject-item {{ str_contains(request()->getPathInfo(), 'article') ? 'menubar-item-active' : '' }}"
                    href="{{ route('admin.subject.article') }}" wire:navigate>
                    <p>وتار</p>
                </a>

                <a class="menubar-item  course-item {{ str_contains(request()->getPathInfo(), 'course') ? 'menubar-item-active' : '' }}"
                     href="{{ route('admin.course.course') }}" wire:navigate>
                    <p>کۆرس</p>
                </a>
                <a class="menubar-item  course-item {{ str_contains(request()->getPathInfo(), 'group') ? 'menubar-item-active' : '' }}"
                   href="{{ route('admin.course.group') }}" wire:navigate>
                    <p>گروپ</p>
                </a>
                <a class="menubar-item  course-item {{ str_contains(request()->getPathInfo(), 'subscribers') ? 'menubar-item-active' : '' }}"
                   href="{{ route('admin.course.subscribers') }}" wire:navigate>
                    <p>بەشداربووان</p>
                </a>
{{--                <div class="menubar-item  course-item ">--}}
{{--                    <p>گروپ</p>--}}
{{--                </div>--}}
{{--                <div class="menubar-item  course-item  ">--}}
{{--                    <p>بەشداربوان</p>--}}
{{--                </div>--}}
                <div class="menubar-item  people-item ">
                    <p>گشتی</p>
                </div>
                <a class="menubar-item  people-item {{ str_contains(request()->getPathInfo(), 'writer') ? 'menubar-item-active' : '' }}"
                    href="{{ route('admin.staff.writer') }}" wire:navigate>
                    <p>نووسەر</p>
                </a>
                <div class="menubar-item  people-item ">
                    <p>وەرگێڕ</p>
                </div>
                <div class="menubar-item  people-item ">
                    <p>وانەبێژ</p>
                </div>

                <div class="menubar-item  setting-item ">
                    <p>بەکارهێنەر</p>
                </div>
                <div class="menubar-item  setting-item ">
                    <p>دەسەڵاتەکان</p>
                </div>
                <div class="menubar-item  setting-item {{ str_contains(request()->getPathInfo(), 'documents') ? 'menubar-item-active' : '' }}"
                    href="{{ route('admin.setting.document') }}" wire:navigate >
                    <p>بەڵگەنامەکان</p>
                </div>
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
