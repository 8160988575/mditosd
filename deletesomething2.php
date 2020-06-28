<?php
include 'dbcon.php';
 if(($_GET['name']=="gallery") or  ($_GET['name']=="booklet"))

 {

   $newu=$_GET['site']."photo";

   $qry="SELECT * FROM `".$newu."` where `category`='".$_GET['name']."' ";
   $result=mysqli_query($con,$qry);

 }


 if(($_GET['name']=="special") or  ($_GET['name']=="offer"))

 {

   $newu=$_GET['site']."data";

   $qry="SELECT * FROM `".$newu."` where `category`='".$_GET['name']."' ";
   $result=mysqli_query($con,$qry);

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

  <meta name="author" content="S&Sn brothers"/>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <style media="screen">
     *
     {

    margin: 0;
    padding: 0;

     }


  body
   {
   width: 100%;
   height: 100%;



   }


   .restaurantpic
   {

     width: 100%;
     height: 30%;
     margin-top: 3%;






   }


   .restaurantpic img
  {
  margin-top: 3%;
    width: 45%;
    height: 100%;
    float: left;
    margin-left: 2.5%;
    margin-right: 2.5;



  }






   </style>

</head>

<body>


<?php     if(($_GET['name']=="gallery") or  ($_GET['name']=="booklet")){
    ?>



    <div class="restaurant">

        <div class="restaurantpic">

       <?php
           while($rows=@mysqli_fetch_assoc($result))
    	   {
       ?>


         <a href="finaldelete.php?db=<?php echo $newu; ?>&id=<?php echo $rows['id']; ?>&pic=<?php  echo $rows['photo'];  ?>&cate=<?php  echo $_GET['name']; ?>"><img src='uploads/<?php echo $rows['photo']; ?>'  alt="pic">



      <?php
         }

       }
      ?>
    </div>


</div>







      <?php     if(($_GET['name']=="special") or  ($_GET['name']=="offer")){
          ?>


             <?php
                 while($rows=@mysqli_fetch_assoc($result))
          	   {
             ?>

        <div class="data">

    <a href="finaldelete.php?db=<?php echo $newu; ?>&id=<?php echo $rows['id']; ?>">  <p style="margin:10px;text-align:center; ">Content:<?php   echo $rows['content']  ?></p></a>

        </div>

           <hr/>
            <?php
               }

             }
            ?>



























</body>

</html>
