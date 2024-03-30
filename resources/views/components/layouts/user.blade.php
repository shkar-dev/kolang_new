<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>کۆڵەنگ</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" href="{{ asset('assets/kolang/kolang-w.png') }}" />
        <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
            integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('user-style/home.css') }}" />
        <link rel="stylesheet" href="{{ asset('user-style/second-section.css') }}" />
        <link rel="stylesheet" href="{{ asset('user-style/title-one.css') }}" />
        <link rel="stylesheet" href="{{ asset('user-style/title-two.css') }}" />
        <link rel="stylesheet" href="{{ asset('user-style/first-content.css') }}" />
        <link rel="stylesheet" href="{{ asset('user-style/small-card.css') }}" />
        <link rel="stylesheet" href="{{ asset('user-style/footer.css') }}" />
        <link rel="stylesheet" href="{{ asset('user-style/category.css') }}" />
        <link rel="stylesheet" href="{{ asset('user-style/mobile-navigation.css') }}" />
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="{{ asset('user-style/user-navigation.css') }}" />
        <link rel="stylesheet" href="{{ asset('user-style/active-courses.css') }}" />
        <link rel="stylesheet" href="{{ asset('user-style/mobile-device.css') }}" />
        <link rel="stylesheet" href="{{ asset('user-style/education.css') }}" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    </head>

    <body>
        <div id="pre-loader-container" wire:loading>
            <livewire:user.loading />
        </div>
        <livewire:user.user-navigation-bar />
        <livewire:user.mobile-navigation />
        @yield('content')
        <livewire:user.footer />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            $(window).on('resize', function() {
                if (window.innerWidth < 728) {
                    $('.mobile-navigation-container').css('display', 'flex');
                    $('.user-navbar-container').css('display', 'none');
                    $('.hidden-section').css('height', '100vh');
                } else {
                    $('.mobile-navigation-container').css('display', 'none');
                    $('.user-navbar-container').css('display', 'flex');
                    $(".user-navbar-container").slideDown()
                    $('.hidden-section').css('height', '84vh');
                }
            })

            // $(window).on('load',function(){
            //     if(window.innerWidth  < 728){
            //         $('.mobile-navigation-container').css('display','flex');
            //         $('.user-navbar-container').css('display','none');
            //         $('.hidden-section').css('height','100vh');
            //     }else{
            //         $('.mobile-navigation-container').css('display','none');
            //         $('.user-navbar-container').css('display','flex');
            //         $('.hidden-section').css('height','84vh');
            //     }
            //     $("body").css('overflow','hidden');
            //     $('#pre-loader-container').hide();
            //     $('#pre-loader').hide();
            //     setTimeout(function (){
            //         $('.logo-loading-container').fadeOut()
            //     },4500)
            //     $('.logo-loading-container').fadeIn()
            //     setTimeout(function () {
            //         $(".landing-section").delay(1000).fadeIn(800);
            //         $("body").css('overflow','unset');
            //     },4500);
            //     $('#pre-loader-container').hide()
            // })


            $(function() {
                $('a[href*=#]').on('click', function(e) {
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: $($(this).attr('href')).offset().top
                    }, 500, 'linear');
                });
            });
        </script>
        <script>
            AOS.init();
        </script>

        <script>
            $('.mobile-navigation-drawer-container').css('display', 'none')
            $('.mobile-navigation-drawer').css('display', 'none')
            $('#mobile-menu-button').on('click', function() {
                $('.mobile-navigation-drawer-container').fadeIn();
                $('.mobile-navigation-drawer').fadeIn().delay(3000);
                $('body').css('overflow', 'hidden')
            })
            $('#mobile-menu-close-button').on('click', function() {
                $('.mobile-navigation-drawer-container').fadeOut();
                $('body').css('overflow', 'unset')
            })
        </script>
        <script>
            var menu_container = document.getElementById('mobile-navigation-drawer-container');
            menu_container.addEventListener('click', function(e) {
                if (e.target == this) {
                    $('.mobile-navigation-drawer-container').fadeOut();
                    $('body').css('overflow', 'unset')
                }
            })
        </script>
        <script>
            $(document).ready(function() {
                // $('#scrollDiv').hide();
                $(window).scroll(function() {
                    if ($(document).scrollTop() > 0) {
                        $('.user-navbar-container').addClass('sticky-navbar')
                        $('.mm-container').css('width', '0px');
                        $('.mm-container').css('height', '0px');
                        $('.logo').css('width', '15px');
                        $('.logo').css('height', '15px');
                        $('.mm-container').fadeOut(1000)
                        $('.logo').fadeOut(300)

                        $('.mr-container').addClass(' mr-container-transform')
                        $('.ml-container').addClass(' ml-container-transform')
                        $('.nav-shape-left').fadeOut(500)
                        $('.nav-shape-right').fadeOut(500)
                        $('.user-navbar-container').css('height', '60px');
                        $('.kolang-text').addClass('move-kolang-text').delay(300)
                    } else {
                        $('.kolang-text').removeClass('move-kolang-text')
                        $('.user-navbar-container').css('height', '90px');
                        $('.nav-shape-left').fadeIn(500)
                        $('.nav-shape-right').fadeIn(500)

                        $('.mr-container').removeClass('mr-container-transform')
                        $('.ml-container').removeClass('ml-container-transform')
                        $('.user-navbar-container').removeClass('sticky-navbar')
                        $('.mm-container').css('width', '218px')
                        $('.mm-container').css('height', '84px')

                        $('.logo').css('width', '85px')
                        $('.logo').css('height', '85px')
                        $('.logo').fadeIn(300)
                        $('.mm-container').fadeIn(1000);
                    }
                });
            });
        </script>
        <script>
            // if(localStorage.getItem('remove-animation') != 'true'){
            //     setTimeout(function(){
            //         var user_navigation_bar = document.getElementsByClassName('user-navbar-container')[0];
            //         user_navigation_bar.classList.remove('animate__fadeInDown')
            //     },1);
            // }
            // var nav_item  = document.querySelectorAll('.nav-item').forEach(item=>{
            //     item.addEventListener('click',event=>{
            //         if(item.classList.contains('logo')){
            //             alert('llll')
            //             localStorage.setItem('remove-animation', 'true');
            //         }else{
            //             alert('others')
            //             var user_navigation_bar = document.getElementsByClassName('user-navbar-container')[0];
            //             user_navigation_bar.classList.remove('animate__fadeInDown')
            //             localStorage.setItem('remove-animation', 'false');
            //         }
            //     })
            // })
            // localStorage.key('remove-animation','true');
        </script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    </body>

</html>
