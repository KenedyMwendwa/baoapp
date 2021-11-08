<?php 
session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>packageoder</title>
<!-- style -->
<style>
input[type=text],select, input[type=file] , input[type=date], input[type=time]
{  width: 100%;  padding: 10px;  border: 1px solid #ccc;  border-radius: 4px; color:#4A646C ;  box-sizing: border-box;  margin-top: 10px;  margin-bottom: 5px;  resize: vertical; background: whitesmoke;}

input[type=submit] {  background:#1974D2;  color: white; font-weight: bold;  padding: 12px 15px; float: right; border: none;  border-radius: 4px;  cursor: pointer;  margin-top: 4%;}

input[type=submit]:hover {  background-color:green ; padding: 13px 20px;}
.error { width: 100%;  padding: 8px;    color: white; margin-bottom: 2% ;background:#C95A49;  border-radius: 5px;  font-size: small;}
.input{position: inherit; padding: 3px; margin-left: 2.3%; }

.orderformwrapper{background: #F5F5F5; padding: 10px; width: 90%; margin: auto;}
.Porderform-container{width: 60%; margin: auto; background: white; 
  margin-top: 3%; border-radius:10px; float: left;}
.orderform{width: 100%; display: inline-block;position: inherit;padding:15px; }
.packageside{width: 40%; margin-top: 3%; margin: auto; float: left;}
.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .form-container { width:auto; height: auto; } 
  .orderformwrapper{width: auto;}
  .packageside{display: none;}
  .Porderform-container{width: 100%;}
}
</style>

</head>
<body>
<!-- inserting the entities in database -->
<?php

$con = mysqli_connect("localhost", "root", "", "baoapp");

 if(isset($_POST['submit']))
  {
  $package=$_POST['package'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];

      $mysqli = "INSERT INTO packageoder (package, firstname, lastname, email, phone) VALUES('$package', 
      '$firstname', '$lastname', '$email', '$phone')";
      $result =mysqli_query($con, $mysqli);

        if ($result === TRUE) {
         echo "<script type= 'text/javascript'>alert('Package requested successfully');</script>";
    }
 else{echo "<script type= 'text/javascript'>alert('Error in requesting Package. Please try again');</script>";}

 }

?>

<!-- page wrapper -->
         <div class="orderformwrapper">
          <div class="row">

                    <div class="Porderform-container">
                    <form class="orderform" method="post" action="" enctype="multipart/form-data">

                    <label style="font-weight: bold;">Select Package:</label>
                      <select name="package">
                        <option>Basic/Bronze</option>
                        <option>Standard/Silver</option>
                         <option>Premium/Gold</option>
                      </select>

                    
                    <input type="text" name="firstname" placeholder="First Name e.g Kenedy" required="autofocus" > <br/>
                   
                    <input type="text" name="lastname" placeholder="Last Name e.g Mulila" required="autofocus" > <br/>
                    
                    <input type="text" name="email" placeholder="k@gmail.com" required="autofocus" > <br/>
                    
                    <input type="text" name="phone" placeholder="07xxxxxxxx or 01xxxxxxxx" required="autofocus" > <br/>

                    <input type="submit" name="submit" value="Request" >
                    </form>
                    </div>

                    <div class="packageside">
                      <h3 style="text-align: center; color: blue; margin-top: 10%;">Try Baotec Today:</h3>
                     <p style="text-align: center; font-weight: bold;">For The Best Services</p>
                      <h3 style="text-align: center; color: blue; margin-top: 13%;">Working Days:</h3>
                      <p style="text-align: center; font-weight: bold;">Monday - Sunday</p>
                      <h3 style="text-align: center; color: blue;margin-top: 13%;">Working Hours:</h3>
                      <p style="text-align: center; font-weight: bold;"> 24 HRS Daily </p>
                    </div>
            </div>
          </div>
<!-- end form content -->
</body>
</html>