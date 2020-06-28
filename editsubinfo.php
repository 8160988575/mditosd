<?php

include 'dbcon.php';
session_start();


$sid= $_SESSION['sid'];



$qry="SELECT * FROM `mstudy2` where `sid`='".$_SESSION['sid']."' ";
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


   .upperpart
   {

     background-color: #bf3a30;
     background-image: linear-gradient(315deg, #bf3a30 0%, #864ba2 74%);
      padding-bottom: 10px;
      padding-top: 10px;
      margin-top: 5%;
      width: 100%;
      /* margin-bottom: 5%; */
      border-radius: 20px;



   }

  .edittopicinfo
  {

   width:96%;

   background-color: #606060;
    padding-top: 10px;
    color:#F0F0F0;
    padding-bottom: 10px;
  position: relative;
  margin-left: 2%;
  //margin-bottom: 5%;


  }

  .edittopicinfo p
  {

   width:100%;
   //padding-top: 15px;
   text-align: center;

   margin-bottom: 10%;



  }

  .edittopicinfo [type=text]
  {

   width:80%;

   text-align: center;
   margin-bottom: 15px;
   padding: 7px;
  margin-left: 10%;
  background-color: inherit;
  border: none;
  border-bottom: 1px dashed black;
  color:#F0F0F0;


  }

  .edittopicinfo [type=submit]
  {

   width:50%;

   text-align: center;

   padding: 5px;
   margin-left: 25%;



  }







   </style>
</head>

<body>

  <?php  $rows25=@mysqli_fetch_assoc($result);   $sname = $rows25['subname'];  $sdiscription = $rows25['discription'];  ?>

<div class="upperpart">



  <div class="edittopicinfo">

   <p>Edit Information Of Subject Here!!</p>


  <form class="" action="editsubinfo.php" method="post">

    <input type="text" name="tname" value="<?php  echo $sname;  ?>">
    <input type="text" name="tdiscription" value="<?php  echo $sdiscription;  ?>">
    <input type="submit" name="submit" value="Comfirm">

  </form>

  </div>
</div>

<a href="editsubinfo.php?name=delete"><p style="text-align:center;color:red;font-weight:bold">Delete This Hole Subject</p></a>

</body>
</html>

<?php


if(isset($_POST['submit'])) {



  $name = str_replace("'","\'",$_POST['tname']);
  $discription = str_replace("'","\'",$_POST['tdiscription']);


  $qry="update `mstudy2` set `subname`='".$name."' where `sid`='".$_SESSION['sid']."'";
    $run=mysqli_query($con,$qry);

  $qry="update `mstudy2` set `discription`='".$discription."' where `sid`='".$_SESSION['sid']."'";
    $run=mysqli_query($con,$qry);

    header('Location:mainpage.php');

}

 ?>



 <?php
if (isset($_GET['name'])) {




?>
<script>

if(confirm("Once Deleted Can't Be Recovered!"))
{

window.location = "editsubinfo.php?finaldelete=yes";

}

else {

  window.location = "editsubinfo.php";

}

</script>

<?php   } ?>





 <?php
if (isset($_GET['finaldelete'])) {





  $table = $_SESSION['sid']."topic";
  $table2 = $_SESSION['sid']."photo";
  $table22 = $_SESSION['sid']."data";





    $qry2="DELETE  FROM `mstudy2` where `sid`='".$_SESSION['sid']."' ";
    $result=mysqli_query($con,$qry2);

    $qry22="drop table `".$table."`";
    $result=mysqli_query($con,$qry22);

    $qry223="drop table `".$table2."`";
    $result=mysqli_query($con,$qry223);

    $qry2234="drop table `".$table22."`";
    $result=mysqli_query($con,$qry2234);

   header('Location:addingtotopic0.php');

}


 ?>
