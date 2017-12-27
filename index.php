<!DOCTYPE html>
<html lang="en">
<head>
  <title>e-PrashnaPatra</title>
  <link rel="shortcut icon" href="images/logo" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style type="text/css">
.navbar-inverse
{
 background-color:#B0E0E6;
border-color: #E7E7E7;
}
.navbar-default .navbar-brand {
    color: #777;
}
h3
{
color:#B0E0E6;
}
.jumbotron
{
   background-color:white;
   border-color: grey;
}
</style>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">e-PrashnaPatra</a>
    </div>
     <ul class="nav navbar-nav navbar-right">
    <li><a >You are not logged in.</a></li>
    
  </ul>
  </div>
</nav>
<div class="container">
            <h3>SELECT YOUR DEPARTMENT</h3>
              <hr>
<div class="row">
   <div class="col-sm-8">

      <div class="row">
        <div class="col-sm-4">
<img src="images/computer.png" class="img-circle" alt="Computer Science" height="120px;"> 
        </div>

<p>&nbsp;</p>
<p>&nbsp;</p>

        <div class="col-sm-8">
<h4><a href="#">COMPUTER SCIENCE AND ENGINEERING</a></h4>
        </div>
       </div>


<p>&nbsp;</p>

     <div class="row">
       <div class="col-sm-4">
<img src="images/electronics.jpg" class="img-circle" alt="Electronics" height="140px;"> 
       </div>

<p>&nbsp;</p>
<p>&nbsp;</p>

       <div class="col-sm-8">
<h4><a href="#" >ELECTRONICS AND COMMUNICATION ENGINEERING</a></h4>
       </div>
    </div>

<p>&nbsp;</p>

      <div class="row">
         <div class="col-sm-4">
<img src="images/mechanical.jpg" class="img-circle" alt="Mechanical" height="140px;"> 
         </div>

<p>&nbsp;</p>
<p>&nbsp;</p>

        <div class="col-sm-8">
<h4><a href="#" >MECHANICAL ENGINEERING</a></h4>
        </div>
      </div>

<p>&nbsp;</p>

      <div class="row">
         <div class="col-sm-4">
<img src="images/civil.jpg" class="img-circle" alt="Civil" height="140px;"> 
         </div>

<p>&nbsp;</p>
<p>&nbsp;</p>

       <div class="col-sm-8">
<h4><a href="#">CIVIL ENGINEERING</a></h4>
        </div>
    </div>
</div>

<div class="col-sm-4">
    <div class="jumbotron">
<h4 style="color:   #87CEEB"><a>LOGIN</a></h4>
<hr>
<!--Login Form-->
 <form class="form-inline" method="POST" action="login.php" >
  <div class="form-group">
    <label style="color:#B0E0E6 ">Username</label>
    <input type="text" class="form-control"  name="name">
  </div>
  <p>&nbsp;</p>
  <div class="form-group">
    <label style="color:#B0E0E6 ">Password</label>
    <input type="password" class="form-control" name="pass">
  </div>
    <p>&nbsp;</p>
  <button type="submit" class="btn btn-default" style="color: #87CEEB">LOGIN</button>
</form> 
<p>&nbsp;</p>
<a href="password_forget.php">Forgotten Username or Password</a>
<p>&nbsp;</p>
<a href="signup.php">Create An Account</a>

  <?php 
  echo "$msg";
  ?>
      </div>
</div>
<!--Login Form Ends-->
   </div>
</div>
<p>&nbsp;</p>
</body>
</html>

