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

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="learningcss.css">
</head>

<body>



  <?php
      while($rows=@mysqli_fetch_assoc($result))
   {
  ?>




                 <div class="mainpart">

                 <div class="imgpart">

                  <div class="imgpartmore">


                   <a href="2page.php?id=<?php echo $rows['id'];  ?>"><img src="uploads/<?php  echo $rows['photo'];  ?>" alt="photo"></a>

                 </div>
  							 </div>


                 <div class="contantpart">

                   <h3><?php  echo $rows['name'];  ?></h3>
                   <p>location:<?php  echo $rows['id'];  ?></p>
                   <p>Google Link</p>

                 </div>


  						 </div>



            <?php } ?>


</body>

</html>
