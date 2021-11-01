<!DOCTYPE
 html>
<html lang="en">
<head>
<title>about</title>
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
h1{text-align: center;}
p{text-align:; margin-right: 20px; margin-left: 20px; line-height: 180%;}

img{border-radius: 8%;}
.column{width: 33.33%; float:left;}
.icon{text-align: center; font-size:80px;color:blue; margin: 5px; }
.servicecontainer{background: #F5F5F5; padding: 10px; width: 90%; margin: auto;}
.row:after {
  content: "";
  display: table;
  clear: both;
}

  .wrapper{ background:white; width:90%; border: 0px solid #a1a1a1; margin: auto;}

.btn{padding: 10px; background: green; margin: 5px; border:1px solid blue; border-radius:5px; float: right;}
.btn a {float: left; color: #f2f2f2;  text-align: center; padding: 8px 6px; text-decoration: none; font-size: 17px;}

.form-container{ margin: auto; padding: 15px; width: 95%; background: ; margin-top: -3%; border-radius:10px;
}
.form{padding: 15px; 
	background: white; 
	border: 1px solid whitesmoke; 
	border-radius: 20px;
	margin-top: 2px; 
 	width: 100%; 
 	display: inline-block;position: inherit;
 		 }

@media screen and (max-width:600px) {
  body{width: auto; height: auto;}
  hr{display: none; }
  .column{width: 100%; float:left; margin: 5px; padding: 3px;}
  .wrapper{width: 98%;padding: 3px;}
  .btn{margin: 0px;}
}



</style>
</head>
<body>
<div class="wrapper"> 
<?php include('header.php')?>
<div><?php include('about.php')?></div>
<?php include('footer.php')?>
</div>
</body>
</html>