<?php session_start();  ?>

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
  
   
<div style="height:500px;">
     <form  method="post" enctype="multipart/form-data">

   <table cellpadding="0" cellspacing="0" width="600px" height="300px" class="tableborder" style="margin:auto; margin-top:100px;" >
     <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td colspan="2" align="center"><img src="Images/login2.png" width="300px" height="70px"></td></tr>
    
     <tr><td colspan="2">&nbsp;</td></tr>  <tr><td colspan="2">&nbsp;</td></tr> 
                <tr><td align="right"><img src="Images/login1.png" width="200px" height="150px" /></td>
                    <td style="vertical-align:top"><table cellpadding="0" cellspacing="0" height="200px">             


<tr><td class="lefttd">E-Mail</td><td><input type="email" name="email" required="required"/></td></tr>
<tr><td class="lefttd">Password</td><td><input type="password"name="password"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password"  /></td></tr>

<tr>
<td colspan="5" align="center">
<input type="submit" name="submit" value="submit"></td>
</tr>
<?php
$host='localhost';
$user='root';
$pass='';
$db='blooddonation';
$con=mysqli_connect($host,$user,$pass,$db);


if (isset($_POST['email']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$email = $_POST['email'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM donordb WHERE email='$email' and password='$password'";
 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);

//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
	 echo "<script> window.location.assign('newlist.php'); </script>";
	

}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['email'])){

echo "

 <tr><td style='font-size:14px'>Not A DONOR.?</td><td ><a href='registration.php' style='color:#C30'>Click here</a> to REGISTER.</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
}
?>


</table>
</td></tr></table>


		
</form>
</div>



</body>
</html>