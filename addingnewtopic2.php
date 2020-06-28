
<?php
include 'dbcon.php';


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


   header  h1
   {
   background-image: linear-gradient(to right, #D1913C 0%, #FFD194 100%);





   }



   	form
   	{

       margin: 10%;

   	}


    form [type="text"]
   	{

   	  width: 100%;
   		margin-top: 3%;
   			margin-bottom: 3%;
   		text-align: center;
   		border: none;
   		border-bottom: 2px solid yellow;
   		background-color: #f4f4f4;
   		padding: 10px;




   	}


   	 form [type="submit"]
   	 {

   		 width: 50%;

   			 margin: 7% 25% 3% 25%;
   		 text-align: center;

   		 border: 2px solid red;
        background-image: linear-gradient(to right, #FF512F 2%, #F09819 100%);






   		 color:black;
   		 padding: 10px;




   	 }



     </style>




</head>

<body>



  <header>

     <h1 style="text-align:center;padding:15px;color:white;margin:15px;border-radius:15px;">Adding New Topic</h1>

  </header>


  <section>

    <form class="" action="addingnewtopic2.php" method="post" enctype="multipart/form-data">
     <input type="text"  name="name"  placeholder="Topic  Name">
     <input type="text"  name="discription"  placeholder="Topic  Discription">
     <input type="text"  name="sid"  value="<?php   echo $_GET['sid'];  ?>" style="display:none;">
  	 <input type="submit" name="submit" value="Add Topic">
  	</form>

  </section>



</body>

</html>


<?php

if (isset($_POST['submit'])) {


$ueid=$_POST['sid'];

$newtable1=$ueid."topic";

$topic = str_replace("'","\'",$_POST['name']);
$discription = str_replace("'","\'",$_POST['discription']);


  $yupping="INSERT INTO  `".$newtable1."`(`tname`,`tdiscription`) VALUES ('".$topic."','".$discription."')";
  $run=mysqli_query($con,$yupping);

  echo $newtable1;

  header('Location:addingtotopic.php?sid='.$_POST['sid']);


}


 ?>
