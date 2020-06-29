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
  <link rel="stylesheet" href="categorycss.css">

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


  <div class="header">
    <h2>Write Demands</h2>
    <!-- <img src="harmeety round.jpg" alt=""> -->
  </div>


  <div class="text22">
    <div class="infoheading">
      <p>Write your Demand's Below </p>
    </div>
    <div class="textarea">
    <form class="" action="future.php" method="post">


     <input type="text" name="adding" value="" placeholder="Suggest Here">
     <input type="submit" name="submit" value="submit">
    </form>

    </div>


  </div>



</body>

</html>


<?php

    if (isset($_POST["submit"])) {


			if(isset($_COOKIE['number'])){


      echo "Thank you " ;?><span style="color:red"><?php echo $_COOKIE['name'];?></span><?php echo "   Respondig It We recived your request We surely work on It.";


       $suggestion=$_POST["adding"];
       $user=$_COOKIE["name"];

			 $con=mysqli_connect('localhost','checkinguser','checkinguser','checkingdb');




	 		  	$qry="INSERT INTO  `future` (`name`,`request`,`number`) VALUES ('".$_COOKIE['name']."','".$_POST['adding']."','".$_COOKIE['number']."')";
	 		  	$run=mysqli_query($con,$qry);

     }
		 else {
		 	            ?>

                    <p style="text-align:center; padding:7px;margin:5px;background-color:white;color:green;">Thnak you!!We added your Requset but Please be login so that we can contact you shortly!!</p>

									  <?php
											 $con=mysqli_connect('localhost','checkinguser','checkinguser','checkingdb');


										$qry="INSERT INTO  `future` (`name`,`request`,`number`) VALUES ('".$_COOKIE['name']."','".$_POST['adding']."','".$_COOKIE['number']."')";


                   		$run=mysqli_query($con,$qry);
		 }


    }


 ?>
