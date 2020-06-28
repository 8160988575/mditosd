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


  .middlepart
  {

    background-color: #3f0d12;
    background-image: linear-gradient(315deg, #3f0d12 0%, #a71d31 74%);


  padding: 10px;
  margin-bottom: 20%;
  margin-top: 10%
  position:relative;
  border-radius: 10px;



  }

  .contantcube
  {

 width: 40%;
 position: absolute;
 height: 20%;
 margin-top: 50px;



  }

    .swiper3 {
      width:60%;
      height: 20%;
      /* margin-left: 40%; */
      position: absolute;
    margin-right: 0;
    left: 20%;
    }

    .slide3 {
    width: 100%;
    height: 100%;
    }

    .slide3 img
{

  width: 100%;
  height:100%;

}

@media screen and (min-width:900px)
{


  .swiper3{

  height:35%;


  }

  .middlepart
  {

   width: 70%;
   margin-left: 15%;

  }
}

  </style>
</head>

<body>

  <div class="middlepart">

<div class="contantcube">
  <p>Select Your Thing From Our Cube</p>
</div>

  <!-- Swiper -->
  <div class="swiper-container swiper3">
    <div class="swiper-wrapper wrapper3">
      <div class="swiper-slide slide3"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>
      <div class="swiper-slide slide3"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>
      <div class="swiper-slide slide3"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>
      <div class="swiper-slide slide3"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>
      <div class="swiper-slide slide3"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>
      <div class="swiper-slide slide3"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>
      <div class="swiper-slide slide3"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>
      <div class="swiper-slide slide3"><img src="uploads/.5ee7b6947f5c88.54567421.jpg" class="img-fluid pull-xs-left" alt="..."></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination pagination3"></div>
  </div>

</div>

  <!-- Swiper JS -->
  <script src="swiper/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper3 = new Swiper('.swiper3', {
      autoplay: {
         delay: 3000,
         disableOnInteraction: true,
       },
      effect: 'cube',
      grabCursor: true,
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      pagination: {
        el: '.pagination3',
      },
    });
  </script>
</body>

</html>
