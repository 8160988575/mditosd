<?php

if ($_COOKIE['number'] == "8160988575") {

   header('Location:addingnew.php');

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
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="S&Sn brothers"/>


<style>


*
{
	margin:0px;
	padding:0px;

}
.form22
{   margin-top:10%;
	margin-left:10%;
	float:left;
	clear:both;
	border:5px outset green;


}

.form22 input[type=text],input[type=password]
{
	margin:50px;
	border:none;
	border-bottom:2px outset green;
	background-color:#D4EFDF;
	padding:10px;
}

.form22 input[type=submit]
{
    font-weight:bold;
	color:green;
	padding:20px;

	text-align:center;
	margin:25%;
}
.title
{  text-align:center;
    padding:20px;
    font-weight:bold;
	background-color:#EBF5FB ;
	margin:0px;

}

.bar p
{  float:left;
	width:33.3%;
	text-align:center;
	background-color:#EBF5FB ;
	//padding:20px 0px;
	font:10px arial sans-serif;
	font-weight:bold;
	color:blue;
	text-decoration:underline;


}

.bar
{
	margin-top:0px;
      width:100%;
	  padding-bottom:30px;
	  padding-top:5px;
	  background-color:#EBF5FB;
	  	border-radius:50px;
		border-top:2px solid white;
}






@media screen and (min-width:900px)
{
.form22
{   margin-top:10%;
	margin-left:35%;
	float:left;
	clear:both;
	border:5px outset green;


}


.bar p
{  float:left;
	width:33.3%;
	text-align:center;
	background-color:#EBF5FB ;
	padding:20px 0px;
	font:20px arial sans-serif;
	font-weight:bold;
	color:blue;
	text-decoration:underline;

}
}



</style>
</head>
<body>
<div class="title">
<h1>This page is For Harmeety People's</h1>
</div>
<div class="bar" style="display:none">
<a href="registrationform.php"><p>Reg. your Restaurant for free</p></a>
<a href="advertisment2.php"><p>Advertise on Harmeety at Chipest Rate</p></a>
<a href="us.php"><p>know About Harmeety</p></a>


</div>
<div class="form22">
  <form action="taking.php" method="post">
 <input type="text" name="ide" class="ide" placeholder="Enter ID"> <br/>
<input type="text" name="password" placeholder="Enter Password"><br/>
 <input type="submit" name="submit">
 <form/>
 <a href="forget.php"><p style="color:green;text-align:center">forgetID or Password?</p></a>
</div>



<?php

if(isset($_POST["submit"]))
{

	$id=$_POST["ide"];
	$password=$_POST["password"];

include 'dbcon.php';


$qry="SELECT * FROM `order`";
$result=mysqli_query($con,$qry);


 while($rows=@mysqli_fetch_assoc($result))
 {
     if($id==$rows["id"] && $password==$rows["password"])
	 {
            $tt=$rows["link"];


			echo $tt;

	 }
  }
}
?>


</body></html>
