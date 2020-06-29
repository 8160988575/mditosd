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
 background-color: gray;
   padding: 5px;
   margin-left: 25%;
   border:1px solid black;
   color:white;



  }







   </style>
</head>

<body>

  <?php  $rows25=@mysqli_fetch_assoc($result);   $sname = $rows25['subname'];  $sdiscription = $rows25['discription'];  ?>

<div class="upperpart">



  <div class="edittopicinfo">

   <p>Edit Information Of Subject Here!!</p>


  <form class="" action="enquiry.php" method="post" style="color:white;">

    <input type="text" name="name" value="" placeholder="Name" required>
  <input type="text" name="number" value="" placeholder="Number" required>
  <input type="text" name="interest" value="" placeholder="Watching For..." required>
  <input type="text" name="looked" value="" placeholder="Looked At..." required>
  <input type="text" name="budget" value="" placeholder="Budget" required>
  <input type="submit" name="submit" value="Confirm">

  </form>

  </div>
</div>

</body>
</html>
<?php

if (isset($_POST['submit'])) {

     // $con=mysqli_connect('localhost','root','harsh','mstudy');



     //
     // $yupping="INSERT INTO  `".newenquiry."`(`name`,`number`,`looked`,`interest`,`budget`) VALUES ('$question','$answer','qanda','".$_SESSION['tid']."')";
     //
     //     $run=mysqli_query($con,$yupping);



 echo "Trial is Success";


}

?>
