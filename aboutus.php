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
<!-- include the nav-bar -->
<div>
   <!-- tag-line -->
  <!-- wrapper -->
  <div class="wrapper"> 
  	 <?php include('header.php')?>
  	 <!-- services class -->
<div class="servicecontainer">
  <div>
  	<h1>Our Services:</h1>
  </div>
<!-- servvices begins here -->
<div class="row">
	<!-- start columna -->

	<div class="column">
		<!-- service 1 -->
			<div class="form-container">
			<div class="form">
				<div class="row">
						<h3>Web Development</h3>
							<p>
								The elvolvement of new technology has opened new ways of 
								business transactions that are driven by online marketing.
								Baotec Solutions will work with your business to ensure that your customers 
								are satisfied through creating creative user experience and 
								optimizing the website effectively. <br>
								Our experts are equipped with the best website solutions on the market, 
								whether in revamping/redesigning of existing websites or
							    new websites.
							</p>

							<div class="row" style="margin-right:;">
								<button class="btn"><a href="order.php">Order</a></button>
							</div>
				</div>
			</div>
		</div>
		<!-- end service1 -->
	</div>
<!-- end columna -->



<!-- start columnb -->
	<div class="column">

<!-- start service 3 -->
		<div class="form-container">
			<div class="form">
				<div class="row">
						<h3>Software Applications</h3>
							<p>
								The continous growth of any business organization or institution calls for 
								better management services that can be achieved through techological solutions. 
								Our experts will help in building systems that will best fit your organization and provide optimum solutions. The solutions include:-
								<ul><li>School Management Systems</li></ul>
								<ul><li>Business Management systems</li></ul>
								<ul><li>Inventory Systems</li></ul>
								<ul><li>Payment Gateway Systems</li></ul>
							</p>

							<div class="row" style="margin-right: 0px;">
								<button class="btn"><a href="order.php">Order</a></button>
							</div>
				</div>
			</div>
		</div>
		<!-- end service 3 -->
	</div>
<!-- end columnb -->



	<!-- Start columnc -->
	<div class="column">
<!-- start service5 -->
		<div class="form-container">
			<div class="form">
					<!-- contact us-image -->
				<div class="row">
						<h3>Networking Services</h3>
							<p>
								Currently, the deliverance of quality services requires every organization to 
								communicate consistently with its customers. This can achieved by ensuring that every business is connceted to a strong and reliable network.<br>
								Baotec Online Solutions helps organizations to achieve their network goals by building structured cabling infrastructure, offering secure and smart netowking sytem, and managing LAN and WAN devices. 
							</p>

							<div class="row" style="margin-right: 0px;">
								<button class="btn"><a href="order.php">Order</a></button>
							</div>
				</div>
			</div>
		</div>
		<!-- end service 5 -->
	</div>
	<!--  end column-c -->


</div>
</div>
<?php include('footer.php')?>
</div>
<!-- end wrapper -->
<!-- services ends here -->


<!-- footer -->
<div>

</div>
<!-- end footer -->
</body>
</html>