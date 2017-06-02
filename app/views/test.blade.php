<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/assets/css/swiper.min.css">

    <!-- Demo styles -->
    <style>
    html, body {
        position: relative;
        height: 100%;
    }
    body {
        background: #000;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
    }
    .swiper-slide {
        background-size: cover;
        background-position: center;
    }
    .gallery-top {
        height: 80%;
        width: 100%;
    }
    .gallery-thumbs {
        height: 20%;
        box-sizing: border-box;
        padding: 10px 0;
    }
    .gallery-thumbs .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }
    .gallery-thumbs .swiper-slide-active {
        opacity: 1;
    }
    
    </style>
</head>
<body>
    <!-- Swiper -->
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/1)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/2)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/3)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/4)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/5)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/6)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/7)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/8)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/9)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/10)"></div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/1)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/2)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/3)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/4)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/5)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/6)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/7)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/8)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/9)"></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/10)"></div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="/assets/js/swiper.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var galleryTop = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10,
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;
    
    </script>
</body>
</html>