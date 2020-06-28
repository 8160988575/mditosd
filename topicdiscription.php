<?php

// session_start();

include 'dbcon.php';
$tabname=$_SESSION['sid']."topic";

$qry77="SELECT * FROM `".$tabname."` where `id`='".$_SESSION['tid']."' ";
$result77=mysqli_query($con,$qry77);

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
</head>
<!--
<style media="screen">


*
{

  margin: 0;
  padding: 0;


}
.topicwithdiscription
{


   width: 94%;
   text-align: center;
   font-size: 20px;

  color:white;
  border-radius: 10px;

 margin: 3% 3% 3% 3%;
 background-color: #a40606;
background-image: linear-gradient(315deg, #a40606 0%, #d98324 74%);

 height: 15%;
position: relative;
padding: 15px 0 0px 0;

}

.innerpart
{

  width:94%;
  height:90%;
  top:7%;
  left: 3%;
  position: absolute;
  /* background-color: blue; */


}

.tname
{

width: 100%;
height: 15%;
background-color: #505050;
/* padding: 2% 0 2% 0; */
padding:5px 0 15px 0;

}

.tdiscription
{

 width: 100%;
 height: 63%;
 background-color: #505050;
 margin-top: 1%;


}

.tdiscription p
{
   position: relative;
   top:7%;

}


 @media screen and (min-width:900px)
 {

.topicwithdiscription
{

  height: 20%;
  font-size: 20px;

}

.tname
{

width: 100%;
height: 20%;


}


.tdiscription
{

 width: 100%;
 height: 56%;
 background-color: #505050;
 margin-top: 5px;


}

}

</style>
 -->

<style media="screen">

*
{

 margin: 0;
 padding: 0;

}

  .topicwithdiscription
  {

   width: 96%;
   height: 15%;
   background-color: #726cf8;
   background-color: #adb2d3;
   background-image: linear-gradient(315deg, #adb2d3 0%, #ff6b6c 74%);   margin-top: 0%;
   text-align: center;
   /* border-radius: 15px; */
   color:white;
   margin-left: 2%;
   margin-bottom: 5%;


  }

  .innerpart
  {

   width: 94%;
   height: 90%;
   /* background-color: blue; */
   position: relative;
   top: 6%;
   left: 3.5%;
   opacity: 0.8;

  }

  .tname
  {
   position: absolute;
    width: 100%;
    height: 20%;
    background-color: #505050;
    top: 1%;
    border-radius: 7px;
    padding: 5px 0 5px 0;

  }

  .tdiscription
  {
   position:absolute;
    width: 100%;
    height: 50%;
    background-color: #505050;
   top:35%;
 padding: 5px 0 5px 0;

  }

@media screen and (min-width:900px)
{
  .topicwithdiscription
  {

   height: 15%;

  }


}

</style>


<body>

  <?php  $rows77=@mysqli_fetch_assoc($result77); $topicname = $rows77['tname']; $tdiscription = $rows77['tdiscription']; ?>


    <div class="topicwithdiscription">
      <div class="innerpart">



           <div class="tname">
                <p><?php  echo $topicname;    ?></p>
          </div>
          <div class="tdiscription">
                <p><?php    echo $tdiscription;   ?></p>
          </div>
      </div>
    </div>




</body>

</html>
