<!DOCTYPE html>
<html>
<head>
  <title>oder</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- style -->
<style>

body{}
label{color:#3D2B1F; margin-left:1%;  }

input[type=text],select, input[type=file] , input[type=date], input[type=time]
{  width: 100%;  padding: 10px;  border: 1px solid #ccc;  border-radius: 4px; color:#4A646C ;  box-sizing: border-box;  margin-top: 10px;  margin-bottom: 5px;  resize: vertical; background: whitesmoke;}

input[type=submit] {  background:#1974D2;  color: white; font-weight: bold;  padding: 12px 15px; float: right; border: none;  border-radius: 4px;  cursor: pointer;  margin-top: 4%;}

input[type=submit]:hover {  background-color:green ; padding: 13px 20px;}
.error { width: 100%;  padding: 8px;    color: white; margin-bottom: 2% ;background:#C95A49;  border-radius: 5px;  font-size: small;}

.success { padding: 15px; color: white;background:#1cc88a;  width: 100%; text-align: left; font-size: small; border-radius: 5px;}
.form-container{width: 50%; margin: auto; background: white; margin-top: 3%; border-radius:10px;}

.form{width: 100%; display: inline-block;position: inherit;padding:15px; }

.label {padding: 10px;width: 10%;}
.input{position: inherit; padding: 3px; margin-left: 2.3%; }

.btn{ margin-left: 6.5%; background-color: blue; color: white; }
.wrapper{ background:white; width:90%; border: 0px solid #a1a1a1; margin: auto;}
.orderwrapper{background: #F5F5F5; padding: 10px; width: 90%; margin: auto;}
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

<div class="orderwrapper">
          <nav class="form-container">
          <form class="form" method="post" action="" enctype="multipart/form-data">
          <label>Service:</label>
            <select name="codetype">
              <option>Web Development</option>
              <option>Web Hosting</option>
               <option>Network Consultations</option>
               <option>Software Applications</option>
               <option>Mobile Applications</option>
                <option>Online Marketing</option>
            </select>
          <label>First Name:</label>
          <input type="text" name="firstname" placeholder="kenedy" required="autofocus" > <br/>
          <label>Last Name:</label>
          <input type="text" name="lastname" placeholder="mulila" required="autofocus" > <br/>
          <label>Email:</label>
          <input type="text" name="email" placeholder="k@gmail.com" required="autofocus" > <br/>
          <label>Deliver By(date):</label>
          <input type="date" name="date"  required="autofocus" > <br/>
          <input type="submit" name="save" value="Request" >
          </form>
          </nav>
</div>
<?php include('footer.php')?>
</div>
</body>
</html>