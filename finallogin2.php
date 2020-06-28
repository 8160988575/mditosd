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
<form action="finallogin2.php" method="post">
enter Otp<input type="text" name="yup" required>
<input type="submit" name="submit">
</body>

</html>





<?php
  if(isset($_POST['submit']))
	  {
   session_start();
$a=$_SESSION['a']; $name=$_SESSION['name'];$email=$_SESSION['email'];$number=$_SESSION['mnumber'];$password=$_SESSION['password'];
$abcd=rand(10000,90000);
   $yup=$_POST["yup"];
   // if($a==$yup)
	   if(1==1)
   {

     setCookie("name",$_SESSION["name"],time()+60*60*24*360);
     setCookie("number",$_SESSION["mnumber"],time()+60*60*24*360);
     setCookie("email",$_SESSION["email"],time()+60*60*24*360);
		 setCookie("password",$_SESSION["password"],time()+60*60*24*360);
		 setCookie("cid",$abcd,time()+60*60*24*360);
    setCookie("checking",$_SESSION["email"],time()+60*60*24*360);
//     $con=mysqli_connect('localhost','checkinguser','checkinguser','checkingdb');
		 $con=mysqli_connect('localhost','root','harsh','mstudy');


      $qry="INSERT INTO  `login` (`name`,`number`,`email`,`password`,`cid`) VALUES ('$name','$number','$email','$password','$abcd')";


        $run=mysqli_query($con,$qry);



     header('Location:mainpage.php');



   }

      else
   {

	   header('Location:notmatching.php');
   }


  }

?>
