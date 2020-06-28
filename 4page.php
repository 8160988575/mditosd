<?php
include 'dbcon.php';

session_start();

$table = $_SESSION['sid']."photo";


$qry="SELECT * FROM `".$table."` where `tid`='".$_SESSION['tid']."'";
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
  <style media="screen">


*
{

  margin: 0;
  padding: 0;

}

body
{

  height: 100%;
  width: 100%;

}


 .gallery
 {


    width: 100%;
    height: 40%;
    overflow-x: auto;
    overflow-y: hidden;
    white-space: nowrap;




 }


.gallery .gallery2
{
 display: inline-block;
  height: 100%;
  width: 90%;



}

.gallery2 img
{

   width: 100%;
   height: 100%;

}


  @media screen and (min-width:900px)

	{

		.gallery
 	 {


 	    width: 100%;
 	    height: 50%;
 	    overflow-x: auto;
 	    overflow-y: hidden;
 	    white-space: nowrap;




 	 }

	 .gallery .gallery2
	 {
	  display: inline-block;
	   height: 100%;
	   width: 40%;



	 }



	}



  </style>



</head>

<body>

<?php

  if (isset($_GET['pic'])) {



?>


     <img src="uploads/<?php  echo $_GET['pic']; ?>" alt="img">





   <?php
      }
   ?>





   <div class="between1">



<p>at the between</p>



   </div>









   <div class="between2">

<p>at the between</p>




   </div>




   <div class="gallery">


     <?php

         while($rows=@mysqli_fetch_assoc($result))
       {
     ?>




  <div class="gallery2">







      <a href="4page.php?pic=<?php echo $rows['photo'];  ?>"><img src="uploads/<?php  echo $rows['photo']; ?>"></a>


         </div>








    <?php
       }
    ?>


</div>










</body>

</html>
