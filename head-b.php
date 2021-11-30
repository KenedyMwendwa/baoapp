<!DOCTYPE>
<html lang="en">
<head>
<title>BAOTEC</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, 
initial-scale=1">
<style>
* {  box-sizing: border-box;}
body {  margin: 0;}

/*.col-header-a {  float: left;  width: 10%;  padding: 1px; }
.col-header-b {  float: left;  width: 90%;  padding: 5px; */}
 
 /* Add a black background color to the top navigation */
.topnav1 {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav1 a {
  float: left;
  display: block;
  color: blue;
  text-align: center;
  padding: 14px 16px;
  padding-bottom: 0px;
  text-decoration: none;
  font-size: 20px;
  font-weight: bold;
}

/* Change the color of links on hover */
.topnav1 a:hover {
  background-color: ;
  color: green;
}

/* Add an active class to highlight the current page */


/* Hide the link that should open and close the topnav on small screens */
.topnav1 .icon {
  display: none;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav1 a:not(:first-child) {display: none;}
  .topnav1 a.icon {
    float: right;
    padding-right: 0px;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav1.responsive {position: relative;}
  .topnav1.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav1.responsive a {
    float: left;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>
<div class="topnav1" id="myTopnav1">
  <a href="index.php">BAOTEC SOLUTIONS</a>
  <!-- <a href="index.php">HOME</a> -->
  <a href="aboutus.php">ABOUT US</a>
  <a href="services.php">SERVICES</a>
  <a href="order.php">REQUEST</a>
  <a href="contactus.php">CONTACTUS</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<script type="text/javascript">
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav1");
  if (x.className === "topnav1") {
    x.className += " responsive";
  } else {
    x.className = "topnav1";
  }
}
  </script>
</body>
</html>