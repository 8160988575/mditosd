
<!-- navi site add karva mate nu form and ani data base ma entry with the 2 new table -->

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

     <h1 style="text-align:center;padding:15px;color:white;margin:15px;border-radius:15px;">Adding New Subject</h1>

	</header>

<section>

  <form class="" action="newsite.php" method="post" enctype="multipart/form-data">
   <input type="text"  name="name"  placeholder="Subject Name">
   <input type="text"   name="discription" placeholder="discription" >
	 <input type="text"   name="author" placeholder="Author Name" >
   <input type="text"   name="userid" placeholder="User Id" >
   <input type="text"   name="password" placeholder="Password" >
	Select Profile Site Photo: <input type="file" name="file" value="" >
	 <input type="submit" name="submit" value="Confirm">
	</form>

</section>



<?php

 if (isset($_POST['submit'])) {

$a= rand(1000,9999);
$ueid="a".$a;










 $file=$_FILES['file'];
$filetmp=$file['tmp_name'];
 $filename=$file['name'];
$fileError = $file['error'];
 $filetype = $file['type'];
$fileExt=explode('.',$filename);

$fileActualExt = strtolower(end($fileExt));

$allowed  = array('jpg','jpeg','png');


if (in_array($fileActualExt,$allowed)) {

	if ($fileError === 0) {

	$fileid=uniqid('.',true);

		$fileNameNew= $fileid.".".$fileActualExt;

		$fileDestination = 'uploads/'.$fileNameNew;

		move_uploaded_file($filetmp,$fileDestination);

		$ppp="harsh";
    $discription=str_replace("'","\'",$_POST['discription']);
    $password=str_replace("'","\'",$_POST['password']);
    $userid=str_replace("'","\'",$_POST['userid']);
    $name=str_replace("'","\'",$_POST['name']);
    $author=str_replace("'","\'",$_POST['author']);



			 $yupping="INSERT INTO  `mstudy2`(`photo`,`discription`,`subname`,`sid`,`author`,`userid`,`password`) VALUES ('$fileNameNew','".$discription."','".$name."','$ueid','".$author."','".$userid."','".$password."')";
			 $run=mysqli_query($con,$yupping);

 $newtable1=$ueid."photo";
 $newtable2=$ueid."data";
  $newtable3=$ueid."topic";

     $yyy="CREATE TABLE `".$newtable1."` (photo VARCHAR(200) NOT NULL,tid VARCHAR(10) NOT NULL,id INT(10) AUTO_INCREMENT PRIMARY KEY)";
		 $run=mysqli_query($con,$yyy);


		 $yyy2="CREATE TABLE `".$newtable2."` (content1 VARCHAR(500) NOT NULL,content2 VARCHAR(1000) NOT NULL,category VARCHAR(200) NOT NULL,tid VARCHAR(100) NOT NULL,id INT(10) AUTO_INCREMENT PRIMARY KEY)";
		$run=mysqli_query($con,$yyy2);

    $yyy3="CREATE TABLE `".$newtable3."` (tname VARCHAR(200) NOT NULL,tdiscription VARCHAR(200) NOT NULL,id INT(10) AUTO_INCREMENT PRIMARY KEY)";
   $run=mysqli_query($con,$yyy3);


  header('Location:mainpage.php');




	}else {

		echo " We found Error with this file";
	}




}else {
	echo "cant upload this type of the File";
}

 }
 ?>




</body>

</html>
