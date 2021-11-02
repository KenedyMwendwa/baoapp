<?php 
session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>oder</title>
<!-- style -->
<style>
input[type=text],select, input[type=file] , input[type=date], input[type=time]
{  width: 100%;  padding: 10px;  border: 1px solid #ccc;  border-radius: 4px; color:#4A646C ;  box-sizing: border-box;  margin-top: 10px;  margin-bottom: 5px;  resize: vertical; background: whitesmoke;}

input[type=submit] {  background:#1974D2;  color: white; font-weight: bold;  padding: 12px 15px; float: right; border: none;  border-radius: 4px;  cursor: pointer;  margin-top: 4%;}

input[type=submit]:hover {  background-color:green ; padding: 13px 20px;}
.error { width: 100%;  padding: 8px;    color: white; margin-bottom: 2% ;background:#C95A49;  border-radius: 5px;  font-size: small;}
.input{position: inherit; padding: 3px; margin-left: 2.3%; }

.orderformwrapper{background: #F5F5F5; padding: 10px; width: 90%; margin: auto;}
.orderform-container{width: 50%; margin: auto; background: white; margin-top: 3%; border-radius:10px;}
.orderform{width: 100%; display: inline-block;position: inherit;padding:15px; }

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
<!-- inserting the entities in database -->
<?php

$con = mysqli_connect("localhost", "root", "", "baoapp");

 if(isset($_POST['submit']))
  {
  $service=$_POST['service'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $date=$_POST['date'];

      $mysqli = "INSERT INTO orders (service, firstname, lastname, email, date) VALUES('$service', 
      '$firstname', '$lastname', '$email', '$date')";
      $result =mysqli_query($con, $mysqli);

        if ($result === TRUE) {
         echo "<script type= 'text/javascript'>alert('Order requested successfully');</script>";
    }
 else{echo "<script type= 'text/javascript'>alert('Error in requesting service. Please try again');</script>";}

 }

?>

<!-- page wrapper -->
         <div class="orderformwrapper">
                    <nav class="orderform-container">
                    <form class="orderform" method="post" action="" enctype="multipart/form-data">
                    <label>Service:</label>
                      <select name="service">
                        <option>Web Development</option>
                        <option>Web Hosting</option>
                         <option>Network Consultations</option>
                         <option>Software Applications</option>
                         <option>Mobile Applications</option>
                          <option>Online Marketing</option>
                      </select>
                    <label>First Name:</label>
                    <input type="text" name="firstname" placeholder="enter firstname" required="autofocus" > <br/>
                    <label>Last Name:</label>
                    <input type="text" name="lastname" placeholder="enter lastname" required="autofocus" > <br/>
                    <label>Email:</label>
                    <input type="text" name="email" placeholder="k@gmail.com" required="autofocus" > <br/>
                    <label>Deliver By(date):</label>
                    <input type="date" name="date"  required="autofocus" > <br/>
                    <input type="submit" name="submit" value="Request" >
                    </form>
                    </nav>
          </div>
<!-- end form content -->
</body>
</html>