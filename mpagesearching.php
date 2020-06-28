
<?php

include 'dbcon.php';


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
   <!-- <link rel="stylesheet" href="mainpagecss.css"> -->
 <style media="screen">

 *
 {
   margin: 0;
	 padding: 0;


 }

.header
{
	background-color: #fbbc95;
  background-image: linear-gradient(315deg, #fbbc95 0%, #fddac5 74%);
 height: 7%;
 width: 100%;


}

input[type=text]
{
 background-color: white;
	width: 40%;
	margin-left: 25%;
	position: relative;
	margin-top: 3%;
	border:none;
	padding: 5px;
	border-radius: 10px;
	opacity: 0.7;
	text-align: center;

}

.whilelooptable
{

width: 100%;
background-color: #f4f4f4;
position: fixed;
top: 10%;
z-index: 2;
text-align: center;

}




@media screen and (min-width:900px)
{



 .header
 {

  height: 13%;

 }

	input[type=text]
	{
	 background-color: white;
		width: 40%;
		margin-left: 30%;
		position: relative;
		margin-top: 2%;
		border:none;
		padding: 5px;
		border-radius: 10px;
		opacity: 0.7;

	}

	.whilelooptable
	{

	width: 100%;
	background-color: #f4f4f4;
	position: fixed;
	top: 15%;
	z-index: 2;
	text-align: center;

	}



}





 </style>


</head>

<body>

  <div class="header">

            <div class="left">
                  <i class="fas fa-angle-double-right" onclick="openslidefunction()"></i>
            </div>

            <div class="middle">
                <ul style="list-style-type:none;">
                      <li class="notice" style="display:none">Name Of School</li>
                      <li class="search" style="" class="lisec"><i class="fa fa-search" aria-hidden="true" style="margin-right:5%;"></i><input type="text" onkeyup="searching()" id="filterid" placeholder="Search Here!"></li>
               </ul>
            </div>

            <div class="logo" style="display:none">
                    <img src="harmeety round.jpg" alt="">
            </div>

  </div>




  <div class="whileloop" id="whileloop">


  				<table class="whilelooptable" id="whilelooptable" border-collapse: collapse;  align="center" style="line-height:40px ; border-collapse: collapse"  >
  			<!-- <tr><th>Product</th><th>Price</th></tr> -->



  <?php     $v=0;  while($rows22=@mysqli_fetch_assoc($result22)){?>
  		<tr style="display:none;">
      <!-- <tr> -->
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





</body>

</html>
