<?php
include 'dbcon.php';

   // $qry="DELETE  FROM `".$_GET['db']."` where `id`='".$_GET['id']."' ";
   // $result=mysqli_query($con,$qry);
   //



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
</head>

<body>



<?php

 if (isset($_POST['submitedyes'])) {


   $qry="DELETE  FROM `".$_POST['db']."` where `id`='".$_POST['id']."' ";
   $result=mysqli_query($con,$qry);
// header('Location:mainpage.php');


 }

 if (isset($_POST['submitedyes'])) {

    header('Location:selectingalter.php');

 }

 if (isset($_POST['submitedno'])) {

    header('Location:selectingalter.php');

 }



 ?>

</body>

</html>
