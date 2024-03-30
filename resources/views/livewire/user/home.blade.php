<div>
    <div class="hidden-section"></div>
    <div class="landing-section row m-0 " style="display: none">
        <div class="landing-left col-md-6 ">
            <img src="{{asset('assets/images/shape1.png')}}"  class="landing-shape1"/>
            <img src="{{asset('assets/images/quran.png')}}" class="landing-main-image" />
        </div>
        <div class="landing-right col-md-6">
            <img src="{{asset('assets/images/shape1.png')}}"  class="landing-shape2"/>
            <img src="{{asset('assets/images/shape1.png')}}"  class="landing-shape3"/>
            <div style="width:100%;text-align: center">
                <p class="m-0 landing-heading animate__animated animation-slow1 animate__fadeInDown ">"کتێبی سەرکەوتن و هەندێک یادگاری"</p>
            </div>
            <p class=" m-0 landing-heading-2 animate__animated animation-slow1 animate__fadeInDown  ">    کتێبی سەرکەوتن و هەندێک یادگاری  کتێبی سەرکەوتن و هەندێک یادگاری هەندێک یادگاری</p>
            <div class="landing-button-container animate__animated animation-slow2 animate__fadeInRight ">
                <button class=" custom-outlined-button  ">
                    بابەتی هاوشێوە
                </button>
                <button  class="btn custom-filled-button">
                    بینینی بابەتی زیاتر
                </button>
            </div>
        </div>
    </div>
    <div class="logo-loading-container"  >
        <video    muted  autoplay loop   playsinline    >
            <source src="{{asset('assets/video/kolang-video.mp4')}}" type="video/mp4" />
        </video>
    </div>


    <livewire:user.second-seciton />
    <div class="row w-100 py-4 justify-content-center">
        <p class="courses">کۆرسەکاراکان</p>
    </div>

    <livewire:user.active-courses />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(window).on('load',function(){
            if(window.innerWidth  < 728){
                $('.mobile-navigation-container').css('display','flex');
                $('.user-navbar-container').css('display','none');
                $('.hidden-section').css('height','100vh');
            }else{
                $('.mobile-navigation-container').css('display','none');
                $('.user-navbar-container').css('display','flex');
                $('.hidden-section').css('height','84vh');
            }
            // $("body").css('overflow','hidden');
            //
            // setTimeout(function (){
            //     $('.logo-loading-container').fadeOut()
            //
            // },4500)
            //
            //
            // // $('.logo-loading-container').fadeIn()
            // setTimeout(function () {
            //     $(".landing-section").delay(1000).fadeIn(800);
            //
            //     $("body").css('overflow','unset');
            // },4500);

        })
        setTimeout(function(){
            $("body").css('overflow','unset');
        },4500);
         $(".landing-section").delay(4000).fadeIn(800);
    </script>
</div>
