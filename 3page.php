<?php
include 'dbcon.php';
session_start();

$tabname=$_SESSION['sid']."topic";

$qry77="SELECT * FROM `".$tabname."` where `id`='".$_SESSION['tid']."' ";
$result77=mysqli_query($con,$qry77);



 if(($_GET['cat']=="photo"))

 {
   $catname ="Photo's";
   $newu=$_SESSION['sid']."photo";

   $qry="SELECT * FROM `".$newu."` where `tid`='".$_SESSION['tid']."' ";
   $result=mysqli_query($con,$qry);

 }


 else if(($_GET['cat']=="note"))

 {
   $catname ="Note's";
   $newu=$_SESSION['sid']."data";

   $qry="SELECT * FROM `".$newu."` where ((`tid`='".$_SESSION['tid']."') && (`category`='note'))";
   $result=mysqli_query($con,$qry);

 }


  else if(($_GET['cat']=="video"))

  {
    $catname ="Video's";
    $newu=$_SESSION['sid']."data";

    $qry="SELECT * FROM `".$newu."` where ((`tid`='".$_SESSION['tid']."') && (`category`='video')) ";
    $result=mysqli_query($con,$qry);

  }


  else if(($_GET['cat']=="qanda"))

  {
   $catname ="Q and A";
    $newu=$_SESSION['sid']."data";

    $qry="SELECT * FROM `".$newu."` where ((`tid`='".$_SESSION['tid']."') && (`category`='qanda')) ";
    $result=mysqli_query($con,$qry);

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
  <link rel="stylesheet" href="3pagecss.css">
  <link rel="stylesheet" type="text/css"   href="icon/css/all.css">


   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <style media="screen">
     *
     {

    margin: 0;
    padding: 0;

     }


  body
   {
   width: 100%;
   height: 100%;
   }


   .restaurantpic
   {

     width: 100%;
     height: 30%;
     margin-top: 3%;

   }


   .restaurantpic img
  {
  margin-top: 3%;
    width: 45%;
    height: 100%;
    float: left;
    margin-left: 2.5%;
    margin-right: 2.5;
  }


  .catshower
  {

     width: 36%;
     margin-left: 32%;
     margin-top: 5%;
     margin-bottom: 5%;


  }

  .catshower p
  {

  padding: 10px;
  text-align: center;
  border:1px dashed red;
  border-radius: 30px;
  font-family: cursive;
  font-weight: bold;
  font-size: 20px;

  }


  @media screen and (min-width:900px)
  {

   .container
   {

   width: 40%;

   }

  .catshower
  {

   margin-top: 1%;

  }

  }

   </style>

</head>

<body>


  <div class="header4224">
    <h2 style="color:white">MStudy BY VGEC</h2>
    <img src="harmeety round.jpg" alt="">
  </div>


 <div class="extra">

   <p></p>

 </div>

 <div class="container">
   <div class="catshower">

     <p><?php  echo $catname;  ?></p>

   </div>




<?php

include 'topicdiscription.php';

?>




<?php     if(($_GET['cat']=="photo")){
    ?>



    <div class="restaurant">

        <div class="restaurantpic">

       <?php
           while($rows=@mysqli_fetch_assoc($result))
    	   {
       ?>


 <a href="4page.php?pic=<?php echo $rows['photo'];  ?>"><img src='uploads/<?php echo $rows['photo']; ?>'  alt="pic"></a>


      <?php
         }
?>
         </div>

       </div>  <?php
       }
      ?>








      <?php     if(($_GET['cat']=="note")){
          ?>


             <?php
                 while($rows=@mysqli_fetch_assoc($result))
          	   {
             ?>

        <div class="note">

      <p style="margin:10px;text-align:center;font-size: 20px;"><?php   echo $rows['content1']  ?></p>

        </div>

           <hr/>
            <?php
               }

             }
            ?>






            <?php     if(($_GET['cat']=="qanda")){
                ?>


                   <?php
                       while($rows=@mysqli_fetch_assoc($result))
                     {
                   ?>

              <div class="data">

            <p style="margin:10px;text-align:center;font-size:17px"><span style="color:red;float:left;">Que:</span><?php   echo $rows['content1']  ?></p>
            <p style="margin:10px;text-align:center;font-size:17px"><span style="color:red;float:left;">Ans:</span><?php   echo $rows['content2']  ?></p>

              </div>

                 <hr/>
                  <?php
                     }

                   }
                  ?>

                  <?php     if(($_GET['cat']=="video")){
                      ?>


                         <?php
                             while($rows=@mysqli_fetch_assoc($result))
                           {
                         ?>

                    <div class="data">

                  <!-- <a href="<?php   echo $rows['content1']  ?>"><p style="margin:10px;text-align:center; "><span style="color:red;float:left;">Link:</span>You-Tube Link</p></a> -->
                  <iframe width="100%" height="50%" src="https://youtube.com/embed/xUdjmZ2-fEU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                  <p style="margin:10px;text-align:center; "><span style="color:red;float:left;">Discription:</span><?php   echo $rows['content2']  ?></p>


                    </div>

                       <hr/>
                        <?php
                           }

                         }
                        ?>



</div>

<a href="transtopicright.php"><i class="fas fa-arrow-right" style="position:fixed;bottom:50%;right:1%;font-size:40px;color:black;"></i></a>
<a href="transtopicleft.php"><i class="fas fa-arrow-left" style="position:fixed;bottom:50%;left:1%;font-size:40px;color:black;"></i></a>

</body>

</html>
