<?php

include 'dbcon.php';
session_start();


if(isset($_GET['tid'])){


$_SESSION['tid'] = $_GET['tid'];

}

$sid= $_SESSION['sid'];

$topictable = $sid."topic";

$qry="SELECT * FROM `$topictable` where `id`='".$_SESSION['tid']."' ";
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

  .edittopicinfo
  {

   width:100%;
   margin-top: 5%;
   background-color: #606060;
    padding-top: 10px;
    color:#F0F0F0;
    padding-bottom: 10px;


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

  <?php  $rows25=@mysqli_fetch_assoc($result);   $tname = $rows25['tname'];  $tdiscription = $rows25['tdiscription'];  ?>

  <div class="edittopicinfo">

   <p>Edit Information Of Topic Here!!</p>


  <form class="" action="edittopicinfo.php" method="post">

    <input type="text" name="tname" value="<?php  echo $tname;  ?>">
    <input type="text" name="tdiscription" value="<?php  echo $tdiscription;  ?>">
    <input type="submit" name="submit" value="Comfirm">

  </form>

  </div>


<a href="edittopicinfo.php?name=delete"><p style="text-align:center;color:red;font-weight:bold">Delete This Hole Topic</p></a>

</body>
</html>

<?php


if(isset($_POST['submit'])) {



  $table = $_SESSION['sid']."topic";

  $name = str_replace("'","\'",$_POST['tname']);
  $discription = str_replace("'","\'",$_POST['tdiscription']);


  $qry="update `".$table."` set `tname`='".$name."' where `id`='".$_SESSION['tid']."'";
    $run=mysqli_query($con,$qry);

  $qry="update `".$table."` set `tdiscription`='".$discription."' where `id`='".$_SESSION['tid']."'";
    $run=mysqli_query($con,$qry);

    header('Location:addingtotopic2.php');

}

 ?>



 <?php
if (isset($_GET['name'])) {




?>
<script>

if(confirm("Once Deleted Can't Be Recovered!"))
{

window.location = "edittopicinfo.php?finaldelete=yes";

}

else {

  window.location = "edittopicinfo.php";

}

</script>

<?php   } ?>





 <?php
if (isset($_GET['finaldelete'])) {



  // $con=mysqli_connect('localhost','root','harsh','mstudy');

  $table = $_SESSION['sid']."topic";
  $table2 = $_SESSION['sid']."photo";
  $table22 = $_SESSION['sid']."data";




  // $qry="update `".$table."` set `tname`='na' where `id`='".$_SESSION['tid']."'";
  //   $run=mysqli_query($con,$qry);
  //
  // $qry="update `".$table."` set `tdiscription`='na' where `id`='".$_SESSION['tid']."'";
  //   $run=mysqli_query($con,$qry);

  $qry="DELETE  FROM `".$table."` where `id`='".$_SESSION['tid']."' ";
  $result=mysqli_query($con,$qry);

    $qry2="DELETE  FROM `".$table2."` where `tid`='".$_SESSION['tid']."' ";
    $result=mysqli_query($con,$qry2);

    $qry22="DELETE  FROM `".$table22."` where `tid`='".$_SESSION['tid']."' ";
    $result=mysqli_query($con,$qry22);

  header('Location:addingtotopic.php');

}


 ?>
