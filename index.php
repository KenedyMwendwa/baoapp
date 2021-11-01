<!DOCTYPE
 html>
<html lang="en">
<head>
<title>BAOTEC</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, 
initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}
.indexwrapper{background:#F5F5F5; width:auto; border: 0px solid #a1a1a1; margin: auto;}
/* Create three equal columns that floats next to each other */

/* Responsive layout - makes the three columns stack on top of each 
other instead of next to each other */
@media screen and (max-width:600px) {
  img{height:60px; width: 90%;}
</style>
</head>
<body>
<div class="">

<!-- header goes here -->
<div>
  <?php include('header.php')?>
</div>
<!-- close header -->

<!--  start package cost -->
<?php include('cost.php')?>
<!-- end package cost -->

<!-- insert footer here -->
<div>
	<?php include('footer.php')?>
</div>
<!-- end footer -->
</div>

</body>
</html>
