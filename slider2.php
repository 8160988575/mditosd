<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <!-- <link rel="stylesheet" href="swiper/css/swiper-bundle.min.css"> -->
    <link rel="stylesheet" href="swiper/css/swiper.min.css">

  <!-- Demo styles -->
  <!-- <style>
    body {
      background: #fff;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 100px;
      height: 100px;

    }
  </style> -->
  <style media="screen">

.swiper-container
{

width: 100%;
height: 20%;


}

.swiper-slide
{
width: 50%;
height: 30%;
background-size: cover;
background-position: center;

}



  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="swiper/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      autoplay: {
         delay: 2500,
         disableOnInteraction: true,
       },
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</body>

</html>
