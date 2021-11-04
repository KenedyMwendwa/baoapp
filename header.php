<!DOCTYPE
 html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, 
initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


/* Create three equal columns that floats next to each other */
.head-a{  float: left;  width: 10%;  padding: 15px; }
.head-b{margin: auto; width: 90%;  margin-top: 10px;  }
.navbtn{padding: 10px; background: blue; margin: 5px; border:1px solid blue; border-radius:5px;}
.navbtn a {float: left; color: #f2f2f2;  text-align: center; padding: 8px 6px; text-decoration: none; font-size: 17px;}
.topnav {overflow: hidden; float: right; margin: auto; margin-top: 1px;margin-right: -5%;}
.headerwrapper{
  background-image: linear-gradient(to right, white 30%, green); 
  padding: 10px; 
  width: 90%; 
  margin: auto;}
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - makes the three columns stack on top of each 
other instead of next to each other */
@media screen and (max-width:600px) {
  img{height:60px; width: 90%;}
  .head-a {width:20%;}
  .head-b{width:auto;  font-size: 15px; }
  .topnav{width: auto; float: left;}
  .headerwrapper{width: auto;}
  body{width: auto;}
}
</style>
</head>
<body>
<div class="headerwrapper">
  <!-- head-a -->
<!-- <div class="fix"> -->
<div class="row">
<div class="head-a">
  <img src="img/logoj.jpg" style="width: 120px; height: 110px;">
</div>
<!-- head-b -->
<div class="head-b">
      <div class="topnav">
        <button class="navbtn"><a class="active" href="index.php">Home</a></button>
        <button class="navbtn"><a href="services.php">Services</a></button>
        <button class="navbtn"><a href="aboutus.php">About Us</a></button>
        <button class="navbtn"><a href="contactus.php">Contact Us</a></button>
        <!-- greeting -->
       </div>
</div>
 </div>
<!-- </div> -->
 <div class="row">
 <div>
  <h1 style="text-align: center; color:blue; font-size: 72px;">BAOTEC SOLUTIONS</h1>
  <marquee scrollamount="20" direction="left"><p class="greeting">You need a service? We are here for you!!</p></marquee>
  <!-- end greeting -->
</div>
</div>
</div>
</body>
</html>
