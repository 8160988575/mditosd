<?php

        if (isset($_POST['submit'])) {



    $a=rand(1000,7000);
    $yupmessage="Hi, here is your OTP .$a";
    $name=$_POST['name'];
    $mnumber=$_POST['number'];$yupcode="91";
    $mail=$_POST['email'];
    $password=$_POST['password'];

    session_start();
  $_SESSION['a']=$a;
  $_SESSION['mnumber']=$mnumber;
  $_SESSION['name']=$name;
  $_SESSION['email']=$mail;
    $_SESSION['password']=$password;






    	// Authorisation details.
    	$username = "harshchavda447@gmail.com";
    	$hash = "e9f0f7bd7df35f3cfef68a50e8020944a3a2635fd695a776b16549cf0d84f1d3";

    	// Config variables. Consult http://api.textlocal.in/docs for more info.
    	$test = "0";

    	// Data for text message. This is the text message data.
    	$sender = "HARMTY"; // This is who the message appears to be from.
    	$numbers = $yupcode.$mnumber; // A single number or a comma-seperated list of numbers
    	$message = $yupmessage;
    	// 612 chars or less
    	// A single number or a comma-seperated list of numbers
    	$message = urlencode($message);
    	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
    	$ch = curl_init('http://api.textlocal.in/send/?');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$result = curl_exec($ch); // This is the result from the API
    	curl_close($ch);

          header('Location:finallogin2.php');
}

 ?>




    <?php

  if(isset($_GET['logout']))
  {

    setCookie("name","yup",time()-60*60*24*360);
     setCookie("number","yup",time()-60*60*24*360);
      setCookie("email","yup",time()-60*60*24*360);
      setCookie("password","yup",time()-60*60*24*360);

           header('Location:finallogin.php');


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
	<link rel="stylesheet" href="login22.css">

   <meta name="viewport" content="width=device-width, initial-scale=1.0">





</head>

<body>

    <?php

     if (isset($_COOKIE['name'])) {  ?>

       <p style="background-color:#f4f4f4;padding:8px;text-align:center">Login Success!!!</p>

     <?php }

     else {
       ?>

       <p style="background-color:#f4f4f4;padding:8px;text-align:center">please Login!!!</p>
       <?php
     }



     ?>


   <div class="header">
   	   <h1>Harmeety Welcomes you </h1>
   </div>

      <form class="yup" action="finallogin.php" method="post">
                          <p style="text-align:center;padding:10px;">Login Info!</p>
			 <input type="text" name="name" value="<?php if(isset($_COOKIE['name'])){echo $_COOKIE['name'];} ?>" placeholder="Name"  <?php if(isset($_COOKIE['name'])){ echo "readonly"; } else {echo "required";}?> ><br/>
			 <input type="number" name="number" value="<?php if(isset($_COOKIE['number'])){echo $_COOKIE['number'];} ?>" placeholder="Number"   <?php if(isset($_COOKIE['name'])){ echo "readonly"; } else {echo "required";}?> ><br>
       <input type="text" name="password" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];} ?>" placeholder="Password"   <?php if(isset($_COOKIE['name'])){ echo "readonly"; } else {echo "required";}?> ><br>
			 <input type="text" name="email" value="<?php if(isset($_COOKIE['email'])){echo $_COOKIE['email'];} ?>" placeholder="Email"   <?php if(isset($_COOKIE['name'])){ echo "readonly"; } else {echo "required";}?> ><br>
       <input type="submit" name="<?php if(isset($_COOKIE['name'])){   } else {echo "submit";}?>" value="<?php if(isset($_COOKIE['name'])){echo "Loged In" ;}    else {echo "Login";}   ?>" >
        </form>
<div class="logout">
	 <p><a href="finallogin.php?logout=logout">Logout?</a></p>
</div>

<div class="update">
	 <p><a href="loginupdate.php">Update?</a></p>
</div>



</body>

</html>
