<?php

include 'dbcon.php';
session_start();


if(isset($_GET['tid'])){


$_SESSION['tid'] = $_GET['tid'];

}

$sid= $_SESSION['sid'];

$topictable = $sid."topic";

$qry="SELECT * FROM `$topictable` where `id`='".$_SESSION['tid']."' ";
$result=mysqli_query($con,$qry);

 ?>


<html>
<head>
<meta charset="utf-8">
			<title>Harmeety ||  harmeety partner  || harmeety restaurant ||  Harmeety offers || restaurant offers</title>
			<meta name="description"  content="harmeety , Harmeety,hotel coupan app, dicount from restaurant for book table
,restaurant offers site,restaurant offers in india,restaurant coupan in free,best offer in restaurant website
,restaurant partner "/>

 <meta name="keywords" content="harmeety ,harmeety web app,restaurant offers, harmeety restaurant offers
 harmeety india,harmeet,best restaurant offers ,harmeet india ,harmeety offers,harmeety brothers,harmeety partner"/>

  <meta name="author" content="S&Sn brothers"/>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- <link rel="stylesheet" href="3pagecss.css">

<link rel="stylesheet" href="2pagecss.css"> -->
<link rel="stylesheet" type="text/css"   href="icon/css/all.css">



<link rel="stylesheet" href="2-5page22css.css">


</head>

<body>




  <div class="header">
    <h2 style="color:white;"></h2>
    <img src="harmeety round.jpg" alt="">
  </div>




  <div class="container">

<div class="topictital">
        <?php  $rows25=@mysqli_fetch_assoc($result);   $tname = $rows25['tname'];  $tdiscription = $rows25['tdiscription'];  ?>

        <p><?php echo $tname;  ?></p>

    </div>


    <div class="category">

      <ul>
        <li><i class="far fa-clipboard"></i><a href="selectingalter.php?cat=note">Info. Part</a></li>
        <li><i class="fab fa-youtube"></i><a href="selectingalter.php?cat=video">Review's</a></li>
        <li><i class="fas fa-question-circle"></i><a href="selectingalter.php?cat=qanda">Q and A</a></li>
        <li><i class="far fa-images"></i><a href="selectingalter.php?cat=photo">Photo's</a></li>
        <li><i class="fas fa-book"></i><a href="alledit.php">All</a></li>


      </ul>

    </div>
  </div>






<div class="symbol" style="font-size:50px;position:fixed;bottom:17%;right:0%;color:yellow;padding:15px;border-radius:15px">

      <a href="edittopicinfo.php"><i class="fas fa-pen" style="color:black"></i></a>

</div>


 <a href="transtopicright.php?ep=ep2"><i class="fas fa-arrow-right" style="position:fixed;bottom:50%;right:1%;font-size:40px;color:white;"></i></a>
 <a href="transtopicleft.php?ep=ep2"><i class="fas fa-arrow-left" style="position:fixed;bottom:50%;left:1%;font-size:40px;color:white;"></i></a>





</body>

</html>
