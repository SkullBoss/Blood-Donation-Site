
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Donation</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
<?php include('admin/function.php'); ?>

 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo1.png" alt=""></a></h1>
		</div>
	</div>
</div>
</div>

<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>



   <table  border= "1"  cellpadding="1" cellspacing="1" width="800px" height="500px" style="margin:auto; margin-top:50px;" >
     <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
	 

	 <center>
	 <tr><td colspan="10" align="center"><em> DataBase</em></td></tr>


<tr>

<th>Name</th>
<<th class="lefttd" >Gender</th>
<th class="lefttd" >Age</th>
<th class="lefttd" >Mobile</th>
<th class="lefttd" >Blood Group</th>
<th class="lefttd" >Email</th>
</tr>
<?php

$host='localhost';
$user='root';
$pass='';
$db='blooddonation';
$con=mysqli_connect($host,$user,$pass,$db);
if(!$con)
	echo "NOT Successfully <br>";
$sql="SELECT * FROM requestdb";
$rec=mysqli_query($con,$sql);
while($x=mysqli_fetch_array($rec))
{echo "<tr>";
echo "<td class='lefttd' align='center'>".$x[0]."</td>";
echo "<td class='lefttd>' align='center'>".$x[1]."</td>";
echo "<td class='lefttd>' align='center'>".$x[2]."</td>";
echo "<td class='lefttd>' align='center'>".$x[3]."</td>";
echo "<td class='lefttd' align='center'>".$x[4]."</td>";
echo "<td class='lefttd' align='center'>".$x[5]."</td>";
echo "</tr>";
}

?>
</center>
</table>


<center>	Log Out<t><a href="login.php" style="color:#C30">    Click here    </a> </center>
                        
              


 
</body>
</html>