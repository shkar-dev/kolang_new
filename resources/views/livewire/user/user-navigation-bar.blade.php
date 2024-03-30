<div class="user-navbar-container animate__animated  animation-slow1 animate__fadeInDown"  >
    <div class="navbar-content-container">
        <div class="col-md-5  mr-container "  >
            <a href="{{route('education')}}" wire:navigate  class="nav-item "><div class="{{request()->getpathInfo() == '/education' ? 'w-100' : ' '}}" ></div>پەروەردە</a>
            <a href="{{route('learning')}}" wire:navigate class="nav-item"><div class="{{request()->getpathInfo() == '/learning' ? 'w-100' : ' '}}" ></div>فێربوون</a>
            <a href="{{route('community')}}" wire:navigate class="nav-item"><div class="{{request()->getpathInfo() == '/community' ? 'w-100' : ' '}}" ></div>کۆمەڵگە</a>
            <a href="{{route('morality')}}" wire:navigate class="nav-item"><div class="{{request()->getpathInfo() == '/morality' ? 'w-100' : ' '}}" ></div>ئەخلاق</a>
        </div>
        <div class="col-md-2 mm-container">
            <a class="logo nav-item" href="{{route('home')}} " wire:navigate >
                <img src="{{asset('assets/kolang/kolang-w.png')}}" />
            </a>
        </div>
        <div class="col-md-5 ml-container">
            <a href="{{route('courses')}}" class="nav-item" wire:navigate><div class="{{request()->getpathInfo() == '/courses' ? 'w-100' : ' '}}" ></div>کۆرسەکان</a>
            <a href="{{route('articles')}}" class="nav-item" wire:navigate><div class="{{request()->getpathInfo() == '/articles' ? 'w-100' : ' '}}" ></div> وتارەکان</a>
            <a href="{{route('videos')}}" class="nav-item" wire:navigate><div class="{{request()->getpathInfo() == '/videos' ? 'w-100' : ' '}}" ></div>ڤیدیۆکان</a>
            <div class="nav-item"><div></div></div>
        </div>
        <img src="{{asset('/assets/images/kolang-text.png')}}" class="kolang-text" alt="">
        <img class="nav-shape-left" src="{{asset('assets/images/shape1.png')}}">
        <img class="nav-shape-right" src="{{asset('assets/images/shape1.png')}}">
    </div>
</div>


<script>
    localStorage.key('remove-animation','');
    var user_navigation_bar = document.getElementsByClassName('user-navbar-container')[0];
    if(localStorage.getItem('remove-animation') == 'false') {
         user_navigation_bar.classList.add('animate__fadeInDown')
         localStorage.setItem('remove-animation', 'true');
        // alert('aaa')
    }else if(localStorage.getItem('remove-animation') == 'true'){
        user_navigation_bar.classList.remove('animate__fadeInDown')
        // alert('bbb')
    }else{
        user_navigation_bar.classList.remove('animate__fadeInDown')
        localStorage.setItem('remove-animation', 'true');
    }
    var nav_item  = document.querySelectorAll('.nav-item').forEach(item=>{
        item.addEventListener('click',event=>{
            if(item.classList.contains('logo')){
                 user_navigation_bar.classList.add('animate__fadeInDown')
                localStorage.setItem('remove-animation', 'false');
            }else{
                // alert('clicked')
                localStorage.setItem('remove-animation', 'true');
                $('.user-navbar-container').removeClass('animate__fadeInDown');
            }
        })
    })
 </script>
