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
.kichwa-a{  float: left;  width: 20%;  padding: 0px; }
.kichwa-b{margin: auto; width: 80%;}
.kichwaheaderwrapper{
  /*background-image: linear-gradient(to right, white 30%, green);*/ 
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
  .kichwa-a {width: 20%}
  .kichwa-b{width:80%; text-align: left;}
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
            <?php include('head-b.php')?>
        </div>
 </div>
</div>
</div>
</body>
</html>