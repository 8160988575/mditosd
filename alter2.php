<?php

include 'dbcon.php';
session_start();


$tid= $_SESSION['tid'];
$sid= $_SESSION['sid'];


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
   <link rel="stylesheet" href="treathome.css">
  <meta name="author" content="S&Sn brothers"/>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

   <?php        if(($_GET['name']=="gallery") or  ($_GET['name']=="booklet")){   ?>




	<form class="" action="alter2.php" method="post" enctype="multipart/form-data">
   <input type="text" style="display:none;" name="site" value="<?php echo  $_GET['site'];  ?>">
   <input type="text" style="display:none;"  name="name" value="<?php echo  $_GET['name'];  ?>">
		<input type="file" name="file[]" value="" multiple="" >
		<input type="submit" name="submit" value="upload">
	</form>

<?php    }  ?>

<?php

          if(($_GET['name']=="qanda") or  ($_GET['name']=="o"))  {  ?>

            <form class="" action="alter2.php" method="post" enctype="multipart/form-data">
              <input type="text" style="display:none;" name="site" value="<?php echo  $_GET['site'];  ?>">
              <input type="text" style="display:none;"  name="name" value="<?php echo  $_GET['name'];  ?>">

              <input type="text"  name="contantdata" value="" placeholder="write here">

           		<input type="submit" name="submit" value="upload">
           	</form>




<?php    }

 ?>







<?php

   if (isset($_POST['submit'])) {

        $con=mysqli_connect('localhost','root','harsh','student');



   if(($_POST['name']=="gallery") or  ($_POST['name']=="booklet")){


     for($yup = 0; $yup<count($_FILES['file']['name']) ; $yup++)

   {


     $file=$_FILES['file'];
    $filetmp=$file['tmp_name'][$yup];
     $filename=$file['name'][$yup];
    $fileError = $file['error'][$yup];
     $filetype = $file['type'][$yup];
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



        $newu=$_POST['site']."photo";
        $namee=$_POST['name'];

        echo $newu;
        echo $namee;



        $yupping="INSERT INTO  `".$newu."`(`photo`,`category`) VALUES ('$fileNameNew','$namee')";

          	$run=mysqli_query($con,$yupping);

					header('Location:mainpage.php');







      }else {

        echo " We found Error with this file";
      }




    }else {
      echo "cant upload this type of the File";
    }



   }

 }


 else  if(($_POST['name']=="special") or  ($_POST['name']=="offer"))
  {



    $newu=$_POST['site']."data";
    $namee=$_POST['name'];
    $cont=$_POST['contantdata'];



    $yupping="INSERT INTO  `".$newu."`(`content`,`category`) VALUES ('$cont','$namee')";

        $run=mysqli_query($con,$yupping);

	header('Location:mainpage.php');






 }


   }


 ?>


</body>

</html>
