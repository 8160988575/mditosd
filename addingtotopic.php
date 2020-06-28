<?php

include 'dbcon.php';

session_start();

if (isset($_GET['sid'])) {

$_SESSION['sid'] = $_GET['sid'];

}




$ueid = $_SESSION['sid'];

$newtable1=$ueid."topic";

$qry2="SELECT * FROM `$newtable1` where ((`tname` != 'na') && (`tdiscription` != 'na'))";
$result2=mysqli_query($con,$qry2);


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
   <link rel="stylesheet" type="text/css"   href="icon/css/all.css">

<link rel="stylesheet" href="2page22css.css">

  <style media="screen">

  @media screen and (min-width:900px)
  {

  .container
  {
  margin-top: 3%;
   width:40%;
   margin-left: 30%;
   border-top-left-radius: 0px;


  }

}

  </style>



</head>

<body>



<div class="upperpart">


  <div class="header">
    <h2>Different Area</h2>
    <img src="harmeety round.jpg" alt="">
  </div>
  <div class="searchpart">


  <i class="fa fa-search" aria-hidden="true"></i><input type="text" onkeyup="searching()"  id="filterid" placeholder="search here!">

  </div>
</div>



  <div class="container">


     <div class="category" id="category">


<?php
  while($rows2=@mysqli_fetch_assoc($result2))
  {


   ?>


        <ul>
          <li class="li1"><a href="addingtotopic2.php?tid=<?php  echo $rows2['id'];  ?>"><?php  echo $rows2['tname'];   ?></a></li>




          <div class="topictital">



             <li><?php echo $rows2['tdiscription'];  ?></li>



        </div>
  </ul>


   <?php  } ?>

 </div>
</div>

<script type="text/javascript">


function searching()
{

      let filter=document.getElementById("filterid").value.toUpperCase();
      let filter22=document.getElementById("filterid").value;
      let outer=document.getElementById("category");
      let ul=outer.getElementsByTagName("ul");

      for (var i = 0; i <10; i++) {
          let li =  ul[i].getElementsByTagName("li")[0];
          let li2 =  ul[i].getElementsByTagName("li")[1];




if(li){
       let ftext = li.innerHTML;
       let ftextt = li2.innerHTML;


       if((ftext.toUpperCase().indexOf(filter) > -1) || (ftextt.toUpperCase().indexOf(filter) > -1)) {

         ul[i].style.display = "";

       }else {

         ul[i].style.display = "none";
 }
}

}


}

</script>




  <a href="addingnewtopic2.php?sid=<?php  echo $_SESSION['sid'];  ?>"><i class="fas fa-plus" style="position:fixed;bottom:10%;right:3%;font-size:50px;color:white;"></i></a>

  <div class="symbol">

        <a href="editsubinfo.php"><i class="far fa-edit"  style="font-size:50px;position:fixed;bottom:20%;right:0%;color:white;"></i></a>

  </div>

</body>

</html>
