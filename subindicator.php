<?php


include 'dbcon.php';

   $qry="SELECT * FROM `mstudy2` where `sid`='".$_SESSION['sid']."' ";
   $result=mysqli_query($con,$qry);



 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">


      .subject22
      {

      position: fixed;
      bottom: 0;
      left: 0;
      height: 15%;
      width: 30%;
      /* background-color: red; */
      color:white;
      border-top-right-radius: 170px;
        /* border-top-left-radius: 100px;
        border-bottom-right-radius: 100px; */
       overflow-x:hidden;
       overflow-y: scroll;

      }

      .subject22 p
      {

     position: relative;
     top: 50;
     left: 10;
     font-size: 20px;

      }


        @media screen and (min-width:900px)
        {

     .subject22
     {

        width: 15%;
        height: 20%;
        overflow: hidden;
        border-top: 2px solid <?php echo $tcolor;   ?>;
        border-right: 2px solid <?php echo $tcolor;   ?>;

     }

     .subject22 p
     {
    top:35;
    left:20;

     }


        }

    </style>

  </head>
  <body>



<!-- <div class="subject22" style="background-color:<?php  echo $bcolor; ?>;color:<?php  echo $tcolor;  ?>;border-top:2px dashed <?php  echo $tcolor;?>;border-right:2px dashed <?php  echo $tcolor;?>"> -->

<div class="subject22" style="background-color:<?php  echo $bcolor; ?>;color:<?php  echo $tcolor;  ?>;">



   <?php  $rows25=@mysqli_fetch_assoc($result);   $sname = $rows25['subname'];  ?>

  <p><?php  echo $sname;  ?></p>

</div>



  </body>
</html>
