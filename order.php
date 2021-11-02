<!DOCTYPE html>
<html>
<head>
  <title>oder</title>
 <!-- style -->
<style>
.wrapper{ background:white; width:90%; border: 0px solid #a1a1a1; margin: auto;}
.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .form-container { width:auto; height: auto; } }
</style>

</head>
<body>
<!-- page wrapper -->
<div class="wrapper">
<?php include('header.php')?>
<?php include('orderform1.php')?>
<?php include('footer.php')?>
</div>
</body>
</html>