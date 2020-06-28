<?php

include 'dbcon.php';
session_start();


if(isset($_GET['tid'])){


$_SESSION['tid'] = $_GET['tid'];

}
$sid= $_SESSION['sid'];
$topictable = $sid."topic";

$qry1="SELECT * FROM `$topictable`  LIMIT 1";
$result1=mysqli_query($con,$qry1);
$rows1=@mysqli_fetch_assoc($result1);

$firstid = $rows1['id'];


$qry2="SELECT * FROM `$topictable` ORDER BY `id`  DESC LIMIT 1";
$result2=mysqli_query($con,$qry2);
$rows2=@mysqli_fetch_assoc($result2);

$lastid = $rows2['id'];

$id = $_SESSION['tid'];

$qry="SELECT * FROM `$topictable` where (`id` < '".$id."')  ORDER BY `id` DESC LIMIT 1";
$result=mysqli_query($con,$qry);
  $rows25=@mysqli_fetch_assoc($result);




  if(isset($_GET['ep']))

  {



      if($id == $firstid)
      {

        header('Location:addingtotopic2.php?tid='.$lastid);

      }

      else {


        $newee = $rows25['id'];

          header('Location:addingtotopic2.php?tid='.$newee);


      }

  }


else   {




if($id == $firstid)
{

  header('Location:2-5page.php?tid='.$lastid);

}

else {


  $newee = $rows25['id'];

    header('Location:2-5page.php?tid='.$newee);


}
}
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





</body>

</html>
