
<?php
include 'dbcon.php';
$qry="SELECT * FROM `mstudy2`";
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

            <li><a href="addingtotopic.php?sid=<?php echo $rows['sid'];  ?>"><?php  echo $rows['subname']; ?></a></li>




           <?php
              }
           ?>



               </ul>

             </div>
           </div>




					 <section class="middle">









</body>

</html>
