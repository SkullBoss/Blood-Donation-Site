
<html >
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
<div style="height:530px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" style="margin:auto; width:100%; " >

    <tr><td colspan="2"  align="center"><img src="Images/donor01.png" width="450px" height="80px"  /></td></tr>
   
<tr><td colspan="2">&nbsp;</td></tr>
   
                <tr><td  style=" padding-left:20px;" ><img src="Images/sidebanner.jpg" width="170px" class="shaddoww"/>&nbsp; </td>
                    <td style="vertical-align:top;padding-top:20px;">
                    <table cellpadding="0" cellspacing="0" style="width:100%; height:400px;">

<tr><td class="lefttd">Donor Name:</td><td><input type="text" name="name" required="required" pattern="[a-zA-Z _]{1,15}" title="please enter only character  between 1 to 15 for donor name" /></td></tr>

<tr><td class="lefttd">Gender</td><td><input name="gender" type="radio" value="male" checked="checked">Male<input name="gender" type="radio" value="female" >Female</td></tr>

<tr><td class="lefttd">Age</td><td><input type="number" name="age" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td></tr>
<tr><td class="lefttd">Mobile No</td><td><input type="number" name="mobile" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." /></td></tr>
<tr><td class="lefttd"> Blood Group </td><td><select name="blood" required><option value="">Select</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>




</select></td></tr>
<tr><td class="lefttd">E-Mail</td><td><input type="email" name="email" required="required" /></td></tr>

<tr><td class="lefttd">Password</td><td><input type="password" name="password" required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
<tr><td class="lefttd">Confirm Password</td><td><input type="password" name="password" required="required" pattern="[a-zA-Z0-9 ]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>

<tr><td class="lefttd">Upload Pic</td><td><input type="file" name="t8" /></td></tr>
<tr>
<td colspan="5" align="center">
<input type="submit" name="submit" value="submit"></td>
</tr>

</table>
</form>
        </div>
          
        <div class="clear"></div>
<?php
$host='localhost';
$user='root';
$pass='';
$db='blooddonation';
$con=mysqli_connect($host,$user,$pass,$db);

	
if(isset($_POST['submit']))
{
 //echo" hello <br>";	
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$mobile=$_POST['mobile'];
	$blood=$_POST['blood'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
$query="INSERT INTO donordb VALUES ('$name','$gender','$age','$mobile','$blood','$email','$password')";

if(!$con->query($query))
{
 	echo "<br>USER Email ID already exists";
}
else
{
	echo "done";
}
}


?>
</body>
</html>