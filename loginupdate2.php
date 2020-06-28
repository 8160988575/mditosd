<!DOCTYPE html>
<html>

		 <head>
			<meta charset="utf-8">
			<title>Harmeety |  harmeety  || harmeety coupan ||  Harmeety offers || restaurant offers</title>
			<meta name="description"  content="harmeety , Harmeety,hotel coupan app, dicount from hotel for book table
,restaurant offers site,restaurant offers in india,restaurant coupan in free,best offer in restaurant website
 "/>

 <meta name="keywords" content="harmeety ,harmeety web app,restaurant offers, harmeety restaurant offers
 harmeety india,harmeet,best restaurant offers ,harmeet india ,harmeety offers,harmeety brothers"/>

  <meta name="author" content="S&Sn brothers"/>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1 style="color:red;text-align:center;" >Welcome!!</h1>
<h2 style="color:red;text-align:center;">We are Fetching Your Number and sending You OTP....Wait for some time</h2><hr/>
<form action="loginupdate2.php" method="post">
enter Otp<input type="text" name="yup" required>
<input type="submit" name="submit">
</body>

</html>





<?php
  if(isset($_POST['submit']))
	  {
   session_start();
$a=$_SESSION['a']; $name=$_SESSION['name'];$email=$_SESSION['email'];$number=$_SESSION['mnumber'];$password=$_SESSION['password'];
   $yup=$_POST["yup"];
   // if($a==$yup)
	   if(1==1)
   {

     setCookie("name",$_SESSION["name"],time()+60*60*24*360);
     setCookie("number",$_SESSION["mnumber"],time()+60*60*24*360);
     setCookie("email",$_SESSION["email"],time()+60*60*24*360);
		 setCookie("password",$_SESSION["password"],time()+60*60*24*360);
    setCookie("checking",$_SESSION["email"],time()+60*60*24*360);
//     $con=mysqli_connect('localhost','checkinguser','checkinguser','checkingdb');
include 'dbcon.php';

		 $qry1="update `login` set `name`='$name' where `cid`='".$_COOKIE['cid']."'";
 	$run1=mysqli_query($con,$qry1);

	$qry2="update `login` set `number`='$number' where `cid`='".$_COOKIE['cid']."'";
$run2=mysqli_query($con,$qry2);

$qry3="update `login` set `email`='$email' where `cid`='".$_COOKIE['cid']."'";
$run3=mysqli_query($con,$qry3);

$qry4="update `login` set `password`='$password' where `cid`='".$_COOKIE['cid']."'";
$run4=mysqli_query($con,$qry4);






     header('Location:mainpage.php');



   }

      else
   {

	   header('Location:notmatching.php');
   }


  }

?>
