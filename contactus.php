
<!DOCTYPE
 html>
<html lang="en">
<head>
<title>contact</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, 
initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}
body { font-family: Arial, Helvetica, sans-serif; width:;}
h3{text-align: center;}
h1{text-align: center; font-weight: bold;}
p{margin: 2%;}

 .wrapper{ background:white; width:90%; border: 0px solid #a1a1a1; margin: auto;}
.contactscontainer{background: #F5F5F5; padding: 10px; width: 90%; margin: auto;}

.column{width: 50%; float:left;}
.icon{text-align: center; font-size:80px;color:blue; margin: 0px; }
.form-container{ margin: auto; padding: 15px; width: 65%; background: ; margin-top: -3%; border-radius:10px;}
.form{padding: 15px; 
	background: white; 
	border: 1px solid white; 
	border-radius: 20px;
	margin-top: 2px; 
 	width: 100%; 
 	display: inline-block;position: inherit;
 		 }
 .footer {  float: left;  text-align: center; 
background:#8DB600; color: white; width: 100%;  padding: 5px;
font-weight: bold; 
font-size: 14px;
margin: 1px;}
 input[type=text]
{  width: 100%;  padding: 10px;  border: 1px solid #ccc;  border-radius: 4px; color:#4A646C ;  box-sizing: border-box;  margin-top: 10px;  margin-bottom: 5px;  resize: vertical; background: whitesmoke;}

.textarea
{  width: 100%;  padding: 25px;  border: 1px solid #ccc;  border-radius: 4px; color:#4A646C ;  box-sizing: border-box;  margin-top: 10px;  margin-bottom: 5px;  resize: vertical; background: whitesmoke;}

input[type=submit] {  background:#1974D2;  color: white; font-weight: bold;  padding: 12px 15px; float: right; border: none;  border-radius: 4px;  cursor: pointer;  margin-top: 4%;}

input[type=submit]:hover {  background-color:green ; padding: 13px 20px;}
.error { width: 100%;  padding: 8px;    color: white; margin-bottom: 2% ;background:#C95A49;  border-radius: 5px;  font-size: small;}

.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width:600px) {
  body{width: auto; height: auto;}
  .contactscontainer{width: 100%; padding: 3px;}
  .form-container{width:100%; float:left;}
  .wrapper, .column, .form{width:100%; height: auto;}
}
</style>
</head>
<body>
<?php

$con = mysqli_connect("localhost", "root", "", "baoapp");

 if(isset($_POST['submit']))
  {
  $email=$_POST['email'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $message=$_POST['message'];

       $mysqli = "INSERT INTO messages (email, firstname, lastname, message) VALUES('$email', 
      '$firstname', '$lastname', '$message')";
      $result =mysqli_query($con, $mysqli);

      if ($result === TRUE) {
         echo "<script type= 'text/javascript'>alert('Message delivered successfully');</script>";
      }
 
     else{echo "<script type= 'text/javascript'>alert('Message couldnot deliver. Please try again');</script>";}
 }
?>

<!-- include the nav-bar -->
<div>
  <!-- tag-line -->
  <!-- wrapper -->
  <div class="wrapper">
  <!--  include('header.php') -->
    <?php include('kichwa.php')?>
  <!-- container -->
 <div class="contactscontainer">
  <div>
  	<h1>Get In Touch</h1>
  	<p style="text-align: center;">Want to learn more about how Baotech Online Solutions can help your company handle problems? Leave a message for US.</p>
  </div>
<!-- servvices begins here -->
<div class="row">
	<div class="column">
		<!-- contact form -->
				<div class="form-container">
				<form class="form" method="post" action="" enctype="multipart/form-data">
					<h4 style="text-align: center;">Kindly fill this form.</h4>
				<label>Email Adress:</label>
				<input type="text" name="email" placeholder="mk@gmail.com" required="autofocus" > <br/>

				<label>First Name</label>
				<input type="text" name="firstname" placeholder="first name" required="autofocus" > <br/>

				<label>Last Name</label>
				<input type="text" name="lastname" placeholder="last name" required="autofocus" > <br/>
	
				<label>Message</label>
				<textarea class="textarea" name="message" rows="4" cols="50"></textarea>

				<input type="submit" name="submit" value="Send" >
				</form>
				</div>
	</div>
<!-- end contact form -->

<!-- end other contacts -->	
	<div class="column">
		<div class="form-container">
			<div class="form">
					<!-- contact us-image -->
					<div style="text-align: center;">
						<img src="img/contactus.jpg " style="width: 300px; height: 180px;">
					</div>

				<div class="row">
					<!-- twitter-->
					<div class="" style="">
						<a href="#" class="fa fa-twitter" style="padding: 20px; font-size: 50px;
						width: 50px;text-align: center;text-decoration: none;"></a>
						<a href="#" style="padding: 10px; text-align: center;text-decoration:; font-size: 18px; ">Get Support</a>
					</div>
					<!-- phhone -->
						<div class="" style="margin-top: -29px;">
						<a href="#" class="fa fa-phone" style="padding: 15px; font-size: 50px;
						width: 50px;text-align: center;text-decoration: none;"></a>
						<a href="#" style="padding: 14px; text-align: center;text-decoration:none; font-size: 18px; ">Call:+254706073132</a>
					</div>

						<!-- gmail -->
					<div class="" style="margin-top: -29px;">
						<a href="#" class="fa fa-envelope" style="padding: 15px; font-size: 50px;
						width: 50px;text-align: center;text-decoration: none;"></a>
						<a href="#" style="padding: 14px; text-align: center;text-decoration:; font-size: 18px; ">Drop email</a>
					</div>
						<!-- facebook -->
					<div class="" style="margin-top: -29px; ">
						<a href="#" class="fa fa-facebook" style="padding: 20px; font-size: 50px;
						width: 50px;text-align: center;text-decoration: none;"></a>
						<a href="#" style="padding: 10px; text-align: center;text-decoration:; font-size: 18px; ">Customer Care</a>
					</div>



				</div>
			</div>
		</div>
	</div>
<!-- end other contacts -->
</div>
</div>
<?php include('footer.php')?>
</div>
<!-- end wrapper -->
<!-- services ends here -->


<!-- footer -->
<!-- end footer -->
</body>
</html>
