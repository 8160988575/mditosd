<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="swiper/css/swiper.min.css">

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper1 {
      width: 100%;
      height: 30%;
    }

    .slide1 {
      text-align: center;
      font-size: 18px;
      background: #fff;
      background-position: center;
      background-size: cover;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }



    .swiper2 {
      width: 100%;
      height: 100%;
      margin-left: auto;
      margin-right: auto;
    }

    .slide2 {
      text-align: center;
      font-size: 18px;
      background: #fff;
      height: calc((100% - 30px) / 2); */
      /* height: 20%;  */
      width: 100%;
      background-position: center;
      background-size: cover;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }


    .swiper3 {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 50px;
}

.slide3 {
  background-position: center;
  background-size: cover;
  width: 200px;
  height: 100px;

}
  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper-container swiper1">
    <div class="swiper-wrapper">
      <div class="swiper-slide slide1" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
      <div class="swiper-slide slide1" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
      <div class="swiper-slide slide1" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
      <div class="swiper-slide slide1" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
      <div class="swiper-slide slide1" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
      <div class="swiper-slide slide1" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
      <div class="swiper-slide slide1" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>

    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Add Pagination -->
    <div class="swiper-pagination pagination1"></div>
  </div>

  <div class="swiper-container swiper2">
  <div class="swiper-wrapper">
    <div class="swiper-slide slide2" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
    <div class="swiper-slide slide2" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
    <div class="swiper-slide slide2" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
    <div class="swiper-slide slide2" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
    <div class="swiper-slide slide2" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
    <div class="swiper-slide slide2" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
    <div class="swiper-slide slide2" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>

  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination pagination2"></div>
</div>


<div class="swiper-container swiper3">
  <div class="swiper-wrapper">
    <div class="swiper-slide slide3" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
    <div class="swiper-slide slide3" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
    <div class="swiper-slide slide3" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
    <div class="swiper-slide slide3" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
    <div class="swiper-slide slide3" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
    <div class="swiper-slide slide3" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
    <div class="swiper-slide slide3" style="background-image:url(uploads/.5ee7b6947f5c88.54567421.jpg)"></div>
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination pagination3"></div>
</div>

  <!-- Swiper JS -->
  <script src="swiper/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper1 = new Swiper('.swiper1', {
      cssMode: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.pagination1'
      },
      mousewheel: true,
      keyboard: true,
    });
  </script>



  <script>
  var swiper2 = new Swiper('.swiper2', {
    slidesPerView: 3,
    slidesPerColumn: 2,
    spaceBetween: 30,
    pagination: {
      el: '.pagination2',
      clickable: true,
    },
  });
</script>


<script>
  var swiper3 = new Swiper('.swiper3', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: '.pagination3',
    },
  });
</script>
</body>

</html>
