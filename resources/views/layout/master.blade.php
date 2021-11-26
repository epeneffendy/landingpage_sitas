<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">

    <title>Sistem Informasi Tanah Asset</title>

    <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{asset('/css/owl.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles-aos.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/aos.css')}}"/>

    <style>
        .aos-item__inner {
            background: transparent;
        }
    </style>
</head>

<body>

<header class="main-header clearfix" role="header" data-aos="fade-down" data-aos-easing="linear"
        data-aos-duration="1500">
    <div class="logo">
        <a href="#"><em>Sitas</em> Sidoarjo</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
        <ul class="main-menu">
            <li><a href="#section1">Home</a></li>
            <li><a href="#section5">Tentang</a></li>
            <li><a href="#section6">Kontak</a></li>
        </ul>
    </nav>
</header>

<section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="{{asset('/images/course-video-01.mp4')}}" type="video/mp4"/>
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h2 class="animate__animated animate__fadeInDown"><em>Sitas Desa</em></h2>
            <h6 class="animate__animated animate__fadeInUp">Sistem Informasi Tanah Asset Desa</h6>
            <div class="animate__animated animate__fadeInUp">
                <a href="https://sitas-sidoarjokab.urbanspasial.co.id/webgis/main">
                    <button class="main-btn"><span>Explore!</span></button>
                </a>
            </div>
        </div>
    </div>
</section>

@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Dinas Pemberdayaan Masyarakat dan Desa</p>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>

<script type="text/javascript" src="{{asset('/js/isotope.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/owl-carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/lightbox.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/slick-slider.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/aos.js')}}"></script>

<script>
    AOS.init({
        easing: 'ease-in-out-sine'
    });

    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
        var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
                    scrollTop: reqSectionPos
                },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function () {
            var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').siblings().removeClass('active');
            }
        });
    };

    $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
        if ($(e.target).hasClass('external')) {
            return;
        }
        e.preventDefault();
        $('#menu').removeClass('active');
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function () {
        checkSection();
    });
</script>

@yield('jquery')
</body>
</html>