
<?php
include 'dbcon.php';

$qry="SELECT * FROM `contract`";
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
  <link rel="stylesheet" href="2pagecss.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <div class="header">
    <h2>Different Area</h2>
    <img src="harmeety round.jpg" alt="">
  </div>





  <div class="container">


    <div class="category">

      <ul>






            <?php
                while($rows=@mysqli_fetch_assoc($result))
         	   {
            ?>

            <li><a href="deletesomething.php?site=<?php echo $rows['id'];  ?>"><?php  echo $rows['name']; ?></a></li>




           <?php
              }
           ?>



               </ul>

             </div>
           </div>




					 <section class="middle">


<?php

   if (isset($_GET['site'])) {



$qry2="SELECT * FROM `contract` where `id`='".$_GET['site']."'";
$result2=mysqli_query($con,$qry2);

while($rows2=@mysqli_fetch_assoc($result2))
{


 ?>


   <hr/>

	 <h2 style="text-align:center; margin:5%;"><?php echo  $rows2['name'];  ?></h2>


 <?php  } ?>

</section>









					 <div class="container">


					   <div class="category">

					     <ul>
					       <li><a href="deletesomething2.php?name=gallery&site=<?php echo $_GET['site']  ?>">Gallery</a></li>
					       <li><a href="deletesomething2.php?name=booklet&site=<?php echo $_GET['site']  ?>">Booklet</a></li>
					       <li><a href="deletesomething2.php?name=special&site=<?php echo $_GET['site']  ?>">Special</a></li>
					       <li><a href="deletesomething2.php?name=offer&site=<?php echo $_GET['site']  ?>">Offers</a></li>

					     </ul>

					   </div>
					 </div>





		<?php   }

					  ?>















</body>

</html>
