<?php
include 'dbcon.php';
session_start();

if(isset($_GET['cat'])){


$_SESSION['cat'] = $_GET['cat'];

}


 if(($_SESSION['cat']=="photo"))

 {

   $newu=$_SESSION['sid']."photo";

   $catname = "Photo's";

   $qry="SELECT * FROM `".$newu."` where `tid`='".$_SESSION['tid']."' ";
   $result=mysqli_query($con,$qry);

 }


 else if(($_SESSION['cat']=="note"))

 {
         $catname = "Note's";
   $newu=$_SESSION['sid']."data";

   $qry="SELECT * FROM `".$newu."` where ((`tid`='".$_SESSION['tid']."') && (`category`='note'))";
   $result=mysqli_query($con,$qry);

 }


  else if(($_SESSION['cat']=="video"))

  {
    $catname = "Video's";
    $newu=$_SESSION['sid']."data";

    $qry="SELECT * FROM `".$newu."` where ((`tid`='".$_SESSION['tid']."') && (`category`='video')) ";
    $result=mysqli_query($con,$qry);

  }


  else if(($_SESSION['cat']=="qanda"))

  {
     $catname = "Q and A";
    $newu=$_SESSION['sid']."data";

    $qry="SELECT * FROM `".$newu."` where ((`tid`='".$_SESSION['tid']."') && (`category`='qanda')) ";
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
  <link rel="stylesheet" type="text/css"   href="icon/css/all.css">


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
     height: 35%;
     margin-top: 3%;






   }


   .restaurantpic img
  {
  margin-top: 3%;
    width: 90%;
    height: 100%;
    float: left;
    margin-left: 5%;
    margin-right: 2.5;



  }


.choice
{
  width: 100%;

  height: 5%;
  /* background-color: green; */
  text-align: center;

  border-radius: 25px;
  margin-top: 5%;





}

.choice a
{

  width: 28%;
  float: left;
  /* background-color: red; */
  padding-top: 15px;
  padding-bottom: 15px;
  border:1px dashed black;
  border-radius: 25px;
  margin-left: 2%;
  margin-right: 2%;
  color:#4e0d3a;
  text-decoration: none;
  margin-bottom: 2%;
  margin-top: 2%;


}

.catshower
{

   width: 36%;
   margin-left: 32%;
   margin-top: 5%;
   margin-bottom: 5%;


}

.catshower p
{

padding: 10px;
text-align: center;
border:1px dashed red;
border-radius: 30px;
font-family: cursive;
font-weight: bold;
font-size: 20px;

}



@media screen and (min-width:900px)
{

.catshower
{

 margin-top: 1%;

}

.restaurantpic img
{
margin-top: 3%;
 width: 40%;
 height: 100%;
 float: left;
 margin-left: 5%;
 margin-right: 2.5;



}


}



   </style>

</head>

<body>


  <div class="header223">
    <h2>Association Name:</h2>
    <img src="harmeety round.jpg" alt="">
  </div>

<div class="container">




<?php   include 'topicdiscription.php';   ?>

<div class="catshower">

  <p><?php  echo $catname;  ?></p>

</div>





<?php     if(($_SESSION['cat']=="photo")){
    ?>



    <div class="restaurant">

        <div class="restaurantpic">

       <?php
           while($rows=@mysqli_fetch_assoc($result))
    	   {
       ?>


         <a href=""><img src='uploads/<?php echo $rows['photo']; ?>'  alt="pic"></a>



      <?php
    }  ?>
         </div>


     </div>
<?php
       }
      ?>








      <?php     if(($_SESSION['cat']=="note")){
          ?>


             <?php
                 while($rows=@mysqli_fetch_assoc($result))
          	   {
             ?>

        <div class="note">

      <p style="margin:10px;text-align:center; "><?php   echo $rows['content1']  ?></p>

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

            <p style="margin:10px;text-align:center; "><span style="color:red;float:left;">Ques:</span><?php   echo $rows['content1']  ?></p>
            <p style="margin:10px;text-align:center; "><span style="color:red;float:left;">Ans:</span><?php   echo $rows['content2']  ?></p>

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


   <div class="choice">



                      <a href="finaladdingtotopic.php"><p>ADD</p></a>
                      <a href="idselectingupdate.php?cat=<?php  echo  $_SESSION['cat'];  ?>"><p>UPDATE</p></a>
                      <a href="idselectingdelete.php?cat=<?php  echo  $_SESSION['cat'];  ?>"><p>DELETE</p></a>

  </div>


  <div class="choice">



                     <a href="addingtotopic.php"><p>All Topic's</p></a>
                     <a href="addingtotopic2.php"><p>Edit Other of this topic</p></a>
                     <a href="mainpage.php"><p>Done with Edit</p></a>

 </div>

</div>

 <a href="transtopicright.php?ep=ep2"><i class="fas fa-arrow-right" style="position:fixed;bottom:50%;right:1%;font-size:40px;color:black;opacity:0.8"></i></a>
 <a href="transtopicleft.php?ep=ep2"><i class="fas fa-arrow-left" style="position:fixed;bottom:50%;left:1%;font-size:40px;color:black;opacity:0.8;"></i></a>


</body>

</html>
