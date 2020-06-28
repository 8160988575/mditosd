
<?php
// $con=mysqli_connect('localhost','root','harsh','mstudy');
//$con=mysqli_connect('localhost','checkinguser','checkinguser','checkingdb');

$con=@mysqli_connect('localhost','checkinguser','checkinguser','checkingdb');
if(!$con) {


   $con=@mysqli_connect('localhost','root','harsh','mstudy');



}

if(!$con) {


   $con=@mysqli_connect('sql12.freesqldatabase.com','sql12348338','pnkSCVtk3e','sql12348338');



}

?>
