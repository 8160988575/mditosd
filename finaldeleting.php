<?php
include 'dbcon.php';
//$con=mysqli_connect('localhost','checkinguser','checkinguser','checkingdb');

session_start();

 if(($_SESSION['cat']=="photo"))

 {

   $newu=$_SESSION['sid']."photo";

   $qry="SELECT * FROM `".$newu."` where `id`='".$_GET['id']."'";
   $result=mysqli_query($con,$qry);

 }


 else if(($_SESSION['cat']=="note"))

 {

   $newu=$_SESSION['sid']."data";

   $qry="SELECT * FROM `".$newu."` where `id`='".$_GET['id']."'";
   $result=mysqli_query($con,$qry);

 }


  else if(($_SESSION['cat']=="video"))

  {

    $newu=$_SESSION['sid']."data";

    $qry="SELECT * FROM `".$newu."` where `id`='".$_GET['id']."' ";
    $result=mysqli_query($con,$qry);

  }


  else if(($_SESSION['cat']=="qanda"))

  {

    $newu=$_SESSION['sid']."data";

    $qry="SELECT * FROM `".$newu."` where `id`='".$_GET['id']."' ";
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
  <link rel="stylesheet" href="3pagecss.css">


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


  <div class="header223">
    <h2>MStudy BY VGEC</h2>
    <img src="harmeety round.jpg" alt="">
  </div>






<?php     if(($_SESSION['cat']=="photo")){
    ?>



    <div class="restaurant">

        <div class="restaurantpic">

       <?php
           while($rows=@mysqli_fetch_assoc($result))
    	   {
       ?>


         <a href="4page.php?pic=<?php echo $rows['photo'];  ?>"><img src='uploads/<?php echo $rows['photo']; ?>'  alt="pic">



      <?php
         }

       }
      ?>
    </div>


</div>







      <?php     if(($_SESSION['cat']=="note")){
          ?>


             <?php
                 while($rows=@mysqli_fetch_assoc($result))
          	   {
             ?>

        <div class="note">

      <p style="margin:10px;text-align:center; ">Content:<?php   echo $rows['content1']  ?></p>

        </div>

           <hr/>
            <?php
               }

             }
            ?>






            <?php     if(($_SESSION['cat']=="qanda")){
                ?>


                   <?php
                       while($rows=@mysqli_fetch_assoc($result))
                     {
                   ?>

              <div class="data">

            <p style="margin:10px;text-align:center; "><span style="color:red;float:left;">Question:</span><?php   echo $rows['content1']  ?></p>
            <p style="margin:10px;text-align:center; "><span style="color:red;float:left;">Answer:</span><?php   echo $rows['content2']  ?></p>

              </div>

                 <hr/>
                  <?php
                     }

                   }
                  ?>



                  <?php     if(($_SESSION['cat']=="video")){
                      ?>


                         <?php
                             while($rows=@mysqli_fetch_assoc($result))
                           {
                         ?>

                    <div class="data">

                  <a href="<?php   echo $rows['content1']  ?>"><p style="margin:10px;text-align:center; "><span style="color:red;float:left;">Link:</span>You-Tube Link</p></a>
                  <p style="margin:10px;text-align:center; "><span style="color:red;float:left;">Discription:</span><?php   echo $rows['content2']  ?></p>

                    </div>

                       <hr/>
                        <?php
                           }

                         }
                        ?>


                        <section>
                          <p style="background-color:yellow;margin:5%;text-align:center;padding:10px;">Are you Sure for Delete...</p>
                           <form class="" action="finaldelete.php" method="post">

                              <input type="text"  style="display:none;" name="db" value="<?php  echo $newu; ?>">
                                  <input type="text"  style="display:none;" name="id" value="<?php  echo $_GET['id']; ?>">

                          <input style="background-color:#f4f4f4;padding:5px;text-align:center;width:10%;width:20%;float:left;margin-left:15%;margin-right:15%;" type="submit" name="submitedyes" value="YES">
                          <input style="background-color:#f4f4f4;padding:5px;text-align:center;width:10%;width:20%;float:left;margin-left:15%;margin-right:15%;" type="submit" name="submitedno" value="NO">

                           </form>
                        </section>


</body>

</html>
