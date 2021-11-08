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
.kichwa-a{  float: left;  width: 10%;  padding: 5px; }
.kichwa-b{margin: auto; width: 90%; margin-top: 10px; }
.kichwanavbtn{padding: 10px; background: blue; margin: 5px; border:1px solid blue; border-radius:5px;}
.kichwanavbtn a {float: left; color: #f2f2f2;  text-align: center; padding: 8px 6px; text-decoration: none; font-size: 17px;}
.kichwatopnav {overflow: hidden; float: right; margin: auto; margin-top: 1px;margin-right: -5%;}
.h{text-decoration: none; font-size: 54px; font-weight: bold; padding: 30px;}


.h a:hover{color: hotpink;}
.h a:visited{color: blue;}

.kichwaheaderwrapper{
  background-image: linear-gradient(to right, white 30%, green); 
  padding: 10px; 
  width: 100%; 
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
  .kichwa-a {width:20%;}
  .kichwa-b{width:auto;  font-size: 15px; }
  .kichwatopnav{width: auto; float: left;}
  .kichwaheaderwrapper{width: auto;}
  body{width: auto;}
}
</style>
</head>
<body>
<div class="kichwaheaderwrapper">

<div class="row">
          <div class="kichwa-a">
            <img src="img/logoj.jpg" style="width: 80px; height: 78px;">
          </div>
<!--  -->
        <div class="kichwa-b">
              <div class="kichwatopnav">
                <a href="index.php" style="margin-left: 0%;" class="h">BAOTEC SOLUTIONS</a>
                <button class="kichwanavbtn"><a class="active" href="index.php">Home</a></button>
                <button class="kichwanavbtn"><a href="services.php">Services</a></button>
                <button class="kichwanavbtn"><a href="aboutus.php">About Us</a></button>
                <button class="kichwanavbtn"><a href="contactus.php">Contact Us</a></button>
                <!-- greeting -->
               </div>
        </div>
 </div>

</div>
</div>
</body>
</html>