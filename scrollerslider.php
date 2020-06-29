<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="swiper/css/swiper.min.css">

  <!-- Demo styles -->
  <style type="">


    .swiper4 {
    height: 10%;
    margin-top: 10%;
    }

    .slide4 {


      height: 10%;
  /* background-color: red; */
    }


    .slide4 img
  {

   width: 100%;
   /* height: 150%; */


  }

  @media screen and (min-width:900px)
  {

    .swiper4 {
    height: 20%;
    width: 40%;
    margin-top: 10%;

    }


 }
  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper-container swiper4">
    <div class="swiper-wrapper">
      <div class="swiper-slide slide4"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>
      <div class="swiper-slide slide4"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>
      <div class="swiper-slide slide4"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>
      <div class="swiper-slide slide4"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>
      <div class="swiper-slide slide4"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>
      <div class="swiper-slide slide4"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>
      <div class="swiper-slide slide4"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>
      <div class="swiper-slide slide4"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination pagination4"></div>
  </div>

  <!-- Swiper JS -->
  <script src="swiper/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper4 = new Swiper('.swiper4', {
      autoplay: {
         delay: 2000,
         disableOnInteraction: true,},
      slidesPerView: 3.5,
      spaceBetween: 5,


      // pagination: {
      //   el: '.pagination4',
      //   clickable: true,
      // },
    });
  </script>
</body>

</html>
