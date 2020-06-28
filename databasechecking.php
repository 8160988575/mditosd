<?php

include 'dbcon.php';

$qry="SELECT * FROM `mstudy2`";
$result=mysqli_query($con,$qry);

$qry2223="SELECT * FROM `mstudy2`";
$result22=mysqli_query($con,$qry2223);

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
   <link rel="stylesheet" href="mainpagecss.css">
</head>

<body>



<div class="moreupper">



<div class="upper">

			  <div class="sidesymbol">
			          <i class="fas fa-server" onclick="openslidefunction()"></i>
			  </div>

			  <div class="navigationbar">
			      <ul >
			        <li>hi harsh</li>
			     </ul>
			  </div>

			  <div class="logo">
			       <img src="harmeety round.jpg" alt="">

			  </div>



</div>



<div class="searchpart">


<i class="fa fa-search" aria-hidden="true"></i><input type="text" onkeyup="searching()"  id="filterid" placeholder="search here!">

</div>


</div>






<div class="extra">
	<p></p>

</div>




<div class="whileloop" id="whileloop">


				<table class="whilelooptable" id="whilelooptable" border-collapse: collapse;  align="center" style="line-height:40px ; border-collapse: collapse"  >
			<!-- <tr><th>Product</th><th>Price</th></tr> -->



<?php     $v=0;  while($rows22=@mysqli_fetch_assoc($result22)){?>
		<tr style="display:none;">
		<td class="firsttd"><a style="text-decoration:none" href="2page.php?sid=<?php echo $rows22['sid'];  ?>"><?php echo $rows22['subname'];  ?></a></td>
		<!-- <td class="secondprice"><?php echo $rows22['discription'];  ?></td> -->

	 </tr>
<?php  $v++;  } ?>

</table>

</div>








    <script type="text/javascript">


    function searching()
    {

          let filter=document.getElementById("filterid").value.toUpperCase();

          let outer=document.getElementById("whilelooptable");
          let tr=outer.getElementsByTagName("tr");

          for (var i = 0; i<tr.length; i++) {
          let td =  tr[i].getElementsByTagName("td")[0];



    if(td){
           let ftext = td.innerHTML;

         if (filter == "") {
					 tr[i].style.display = "none";

         }
           else if((ftext.toUpperCase().indexOf(filter) > -1)) {

             tr[i].style.display = "";

           }else {

             tr[i].style.display = "none";
     }
  }

    }


    }

    </script>






  <div class="side-nav" id="side-menu">

       <a href="#" class="btn-close" onclick="closesidemenu()">&times;</a>

     <div class="before">     <a href="finallogin.php"><i class="fas fa-user-circle"></i></a><div class="login"><a href="finallogin.php"><?php if(isset($_COOKIE['name'])){echo $_COOKIE['name'];}else {  echo "Login/SignUp";} ?></a></div></div>
     <div class="after">   <i class="fab fa-phoenix-framework"></i><a href="addingnew.php">Harmeetian's</a></div>
     <div class="after">    <i class="fas fa-concierge-bell"></i><a href="weserve.php">We Serve</a></div>
     <div class="after">    <i class="fas fa-layer-group"></i><a href="future.php">Your demand's</a></div>
     <div class="after">    <i class="fas fa-history"></i><a href="finalpast.php">Your Booked Table</a></div>
     <div class="after">    <i class="fab fa-viber"></i>  <a href="help.html">Help</a></div>
     <div class="after">    <i class="far fa-dizzy"></i>  <a href="moreinfo.php">about</a></div>

   </div>


   <script>

   function openslidefunction()
   {

     document.getElementById('side-menu').style.width='70%';
     //document.getElementById('main2').style.marginLeft='250px';


   }


   function closesidemenu()
   {

     document.getElementById('side-menu').style.width='0px';
     document.getElementById('main2').style.marginLeft='0px';

   }


   </script>






  <!-- <div class="main">



  </div>

  <div class="extra">
    <p>Harmeety.com</p>

  </div> -->


    <?php

      if(isset($_COOKIE["checking"])){  ?>

    <p style="text-align:center;margin:15px;color:red">Login Success!!</p>

      <?php
        setCookie("checking","yeahh",time()-60*60*24*360);
  }
     ?>






          <?php
              while($rows=@mysqli_fetch_assoc($result))
       	   {
          ?>





  <div class="mainpart">

      <div class="imgpart">

							 <div class="imgpartmore">

                 <a href="2page.php?sid=<?php echo $rows['sid'];  ?>"><img src="uploads/<?php  echo $rows['photo'];  ?>" alt="photo"></a>

                 <!-- <a href="2page.php?sid=<?php echo $rows['sid'];  ?>"><img src="uploads/realpaprikaimg.jpeg" alt="photo"></a> -->
               </div>

				</div>


		   <div class="contantpart">

		            <h3><?php  echo $rows['subname'];  ?></h3>
		            <p><?php  echo $rows['discription'];  ?></p>


		   </div>


</div>



         <?php
            }
         ?>
























    <div class="footer" style="display:none;">

          <div class="footer2"><i class="fas fa-filter"></i><a href="category.php">Filter</a></div>
              <div class="footer2"><i class="fas fa-tachometer-alt"></i><a href="nearyou.php">Near you</a></div>
        <div class="footer2"><i class="fab fa-themeco"></i><a href="special.php">Best Deal's</a></div>
        <div class="footer2"><i class="far fa-smile-wink"></i><a href="finallogin.php"><?php if (isset($_COOKIE["name"])) {echo $_COOKIE["name"];} else {echo "Login";}?></a></div>
    </div>

<div class="extrafooter">

     <p></p>

</div>

</body>

</html>
