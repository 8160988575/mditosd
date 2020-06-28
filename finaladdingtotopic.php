<?php

include 'dbcon.php';
session_start();

if (isset($_GET['cat'])) {

$_SESSION['cat'] =$_GET['cat'];
}


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
   <!-- <link rel="stylesheet" href="treathome.css"> -->
  <meta name="author" content="S&Sn brothers"/>
  <link rel="stylesheet" href="addingcss.css">

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>




   <?php        if(($_SESSION['cat']=="note")) {   ?>




	<form class="" action="finaladdingtotopic.php" method="post">
   <!-- <input type="text" style="display:none;"  name="name" value="<?php echo  $_GET['cat'];  ?>"> -->
   <input type="text" name="note" value="" placeholder="Write  Note Here!!!" required>
		<input type="submit" name="submitnote" value="upload">
	</form>

<?php    }  ?>

<?php

          if(($_SESSION['cat']=="qanda"))  {  ?>

            <form class="" action="finaladdingtotopic.php" method="post" enctype="multipart/form-data">
             <!-- <input type="text" style="display:none;"  name="name" value="<?php echo  $_GET['cat'];  ?>"> -->
             <input type="text" name="question" value="" placeholder="Write  Question Here!!!" required>
             <input type="text" name="answer" value="" placeholder="Write  Answer Here!!!" required>
          		<input type="submit" name="submitqanda" value="upload">
          	</form>




<?php    }

 ?>


 <?php

           if(($_SESSION['cat']=="video"))  {  ?>

             <form class="" action="finaladdingtotopic.php" method="post" enctype="multipart/form-data">

              <input type="text" name="link" value="" placeholder="Past Link Here" required>
              <input type="text" name="discription" value="" placeholder="Write  Some Discription!!!" required>
           		<input type="submit" name="submitvideo" value="upload">
           	</form>




 <?php    }

  ?>



   <?php

             if(($_SESSION['cat']=="photo"))  {  ?>

               <form class="" action="finaladdingtotopic.php" method="post" enctype="multipart/form-data">
                <!-- <input type="text" style="display:none;"  name="name" value="<?php echo  $_GET['cat'];  ?>"> -->
                <input type="file" name="file[]" value="" multiple="" required>
             		<input type="submit" name="submitphoto" value="upload">
             	</form>




   <?php    }

    ?>







<?php



   if (isset($_POST['submitqanda'])) {

        // $con=mysqli_connect('localhost','root','harsh','mstudy');

        $newu=$_SESSION['sid']."data";
        $question=$_POST['question'];
        $answer=$_POST['answer'];
          $question=str_replace("'","\'",$question);
            $answer=str_replace("'","\'",$answer);



        $yupping="INSERT INTO  `".$newu."`(`content1`,`content2`,`category`,`tid`) VALUES ('$question','$answer','qanda','".$_SESSION['tid']."')";

            $run=mysqli_query($con,$yupping);

        header('Location:selectingalter.php');
        // header('Location:selectingalter.php?cat=qanda');



   }




 else  if(isset($_POST['submitnote']))
  {
    // $con=mysqli_connect('localhost','root','harsh','mstudy');

    $newu=$_SESSION['sid']."data";
    $note=$_POST['note'];
    $note=str_replace("'","\'",$note);





    $yupping="INSERT INTO  `".$newu."` (`content1`,`content2`,`category`,`tid`) VALUES ('".$note."','note','note','".$_SESSION['tid']."')";

        $run=mysqli_query($con,$yupping);

echo $newu;
echo $_SESSION['tid'];
	  //header('Location:mainpage.php');

    // header('Location:selectingalter.php?cat=note');
header('Location:selectingalter.php');
 }



  else if(isset($_POST['submitvideo']))

   {

     // $con=mysqli_connect('localhost','root','harsh','mstudy');
          $newu=$_SESSION['sid']."data";
          $link=$_POST['link'];
          $discription=$_POST['discription'];
          $link=str_replace("'","\'",$link);
          $link=str_replace(".be","be.com/embed",$link);

          $discription=str_replace("'","\'",$discription);

          $yupping="INSERT INTO  `".$newu."` (`content1`,`content2`,`category`,`tid`) VALUES ('$link','$discription','video','".$_SESSION['tid']."')";



              $run=mysqli_query($con,$yupping);

      	  // header('Location:selectingalter.php?cat=video');
         header('Location:selectingalter.php');

  }






  else if(isset($_POST['submitphoto']))

   {
  // $con=mysqli_connect('localhost','root','harsh','mstudy');

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








            $newu=$_SESSION['sid']."photo";





          $yupping="INSERT INTO  `".$newu."` (`photo`,`tid`) VALUES ('$fileNameNew','".$_SESSION['tid']."')";



            	$run=mysqli_query($con,$yupping);

  					// header('Location:selectingalter.php?cat=photo');
            header('Location:selectingalter.php');







        }else {

          echo " We found Error with this file";
        }




      }else {
        echo "cant upload this type of the File";
      }



     }

}


















 ?>


</body>

</html>
