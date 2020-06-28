<?php
include 'dbcon.php';
session_start();
//
// $tabname=$_SESSION['sid']."topic";
//
// $qry77="SELECT * FROM `".$tabname."` where `id`='".$_SESSION['tid']."' ";
// $result77=mysqli_query($con,$qry77);

 if(1==1)

 {

   $newu=$_SESSION['sid']."photo";

   $qry22="SELECT * FROM `".$newu."` where `tid`='".$_SESSION['tid']."' ";
   $result22=mysqli_query($con,$qry22);

 }


 if(1==1)

 {

   $newu=$_SESSION['sid']."data";

   $qry23="SELECT * FROM `".$newu."` where ((`tid`='".$_SESSION['tid']."') && (`category`='note'))";
   $result23=mysqli_query($con,$qry23);

 }


 if(1==1)

  {

    $newu=$_SESSION['sid']."data";

    $qry24="SELECT * FROM `".$newu."` where ((`tid`='".$_SESSION['tid']."') && (`category`='video')) ";
    $result24=mysqli_query($con,$qry24);

  }


   if(1==1)

  {

    $newu=$_SESSION['sid']."data";

    $qry25="SELECT * FROM `".$newu."` where ((`tid`='".$_SESSION['tid']."') && (`category`='qanda')) ";
    $result25=mysqli_query($con,$qry25);

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
 <link rel="stylesheet" href="allcombinecss.css">
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


.controllingpic
{

 height: 30%;
 width: 100%;
 margin-top: 4%;

}

   .controllingpic img
  {
  margin-top: 2%;
    width: 100%;
    height: 100%;
  }

  iframe
  {

    width: 90%;
    height: 30%;
    margin-left: 5%;

  }

 @media screen and (min-width:900px)
 {

   .controllingpic
   {

    height: 50%;
    width: 90%;
    margin-top: 4%;
    margin-left: 5%;

   }


 iframe
 {

   width: 70%;
   height: 40%;
   margin-left: 15%;
 }

 }



   </style>

</head>

<body>







  <div class="header4224">
    <h2 style="color:white;">MStudy BY VGEC</h2>
    <img src="harmeety round.jpg" alt="">
  </div>


<p class="extra">extra</p>


<div class="container">

<!-- <div class="topicwithdiscription">

  <?php  $rows77=@mysqli_fetch_assoc($result77); $topicname = $rows77['tname']; $tdiscription = $rows77['tdiscription']; ?>

  <p style="color:#4e0d3a;font-weight:bold;padding:15px;margin-bottom:15px;font-family:serif"><?php  echo $topicname;    ?></p>
 <p><?php    echo $tdiscription;   ?></p>

</div> -->

<?php

 include 'topicdiscription.php';

 ?>

          <!-- video starting -->


<div class="qandapart">

<div class="videoinner" style="padding-bottom:50px">





  <?php     if(1==1){
      ?>
      <div class="contentheading">

       <h4 style="position:relative;top:0;width:70%;margin-left:15%;margin-top:5%;">Video's:</h4>
    </div>


         <?php
             while($rows24=@mysqli_fetch_assoc($result24))
           {
         ?>

    <div class="data">

  <iframe   src="https://youtube.com/embed/xUdjmZ2-fEU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <p style="margin:10px;text-align:center;"><span style="color:red;float:left;"></span><?php   echo $rows24['content2']  ?></p>
 <hr/>
    </div>


        <?php
           }

         }
        ?>
</div>
</div>



   <!-- photo starting -->

<div class="qandapart" style="margin-bootom:0">
<div class="photoupper" style="padding-bottom:50px;">


<?php     if(1==1){

    ?>



    <div class="contentheading">

     <h4 style="position:relative;top:0;width:70%;margin-left:15%;margin-top:5%;">Photo's:</h4>
  </div>



       <?php
           while($rows22=@mysqli_fetch_assoc($result22))
    	   {
       ?>

  <div class="controllingpic">



 <a href="4page.php?pic=<?php echo $rows22['photo'];  ?>"><img src='uploads/<?php echo $rows22['photo']; ?>'/></a>

</div>

      <?php
         }
?>

        <?php
       }
      ?>
   </div>
</div>



    <!-- notes part starting -->


<div class="qandapart">




      <?php     if(1==1){
          ?>

          <!-- <div class="contentheading" style="background-color:#f4f4f4;color:white;">

           <h4 style="background-color:#f4f4f4;"></h4>   </div> -->

           <div class="contentheading">

            <h4 style="position:relative;top:0;width:70%;margin-left:15%;margin-top:5%;">Note's:</h4>   </div>
             <?php
                 while($rows23=@mysqli_fetch_assoc($result23))
          	   {
             ?>

        <div class="note">

      <p style="margin:10px;text-align:center; "><spna style="color:#720d5d;float:left;font-family: cursive;font-variant: small-caps;font-stretch: extra-condensed;">Note:</spna><?php   echo $rows23['content1']  ?></p>

        </div>

           <hr/>
            <?php
               }

             }
            ?>

</div>




 <!-- q and a part starting -->

 <div class="qandapart">


            <?php     if(1==1){
                ?>
                <div class="contentheading">

                 <h4 style="position:relative;top:0;width:70%;margin-left:15%;margin-top:5%;">Q and A's:</h4>   </div>

                   <?php
                       while($rows25=@mysqli_fetch_assoc($result25))
                     {
                   ?>

              <div class="note">

            <p style="margin:10px;text-align:center;"><span style="color:#720d5d;float:left;font-family: cursive;font-variant: small-caps;font-stretch: extra-condensed;">Que:</span><?php   echo $rows25['content1'];  ?></p>
            <p style="margin:10px;text-align:center;"><span style="color:#720d5d;float:left;font-family: cursive;font-variant: small-caps;font-stretch: extra-condensed;">Ans:</span><?php   echo $rows25['content2'];  ?></p>

              </div>

                 <hr/>
                  <?php
                     }

                   }
                  ?>

 </div>




</div>


 <a href="transtopicright.php"><i class="fas fa-arrow-right" style="position:fixed;bottom:45%;right:1%;font-size:40px;color:black;"></i></a>
 <a href="transtopicleft.php"><i class="fas fa-arrow-left" style="position:fixed;bottom:45%;left:1%;font-size:40px;color:black;"></i></a>



</body>

</html>
