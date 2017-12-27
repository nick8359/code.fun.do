
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
<script type="text/javascript">
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});

</script>
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
<h3>Fill The Required Fields</h3>
<hr>
<!--Grid Form Starts-->
<div class="row">
<div class="col-md-12">

 <div class="jumbotron">
 <form class="form-inline" method="POST" action="mail_signup.php" >
  <div class="form-group">
    <label style="color:#B0E0E6 ">Name</label>
    <input type="text" class="form-control"  name="name">
    <span class="error">* <?php echo $nameErr;?></span>
 <br><br>
  </div>

  <p>&nbsp;</p>

  <div class="form-group">
    <label style="color:#B0E0E6 ">E-mail</label>
    <input type="email" class="form-control" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
  </div>
    <p>&nbsp;</p>
  <button type="submit" class="btn btn-default" style="color: #87CEEB">SIGNUP</button>
</form> 
<?php
echo "$msg";
echo "$msgType";
?>
 </div>
<!--grid Form Ends-->
</div>
</div>


</div>

</body>

</html>



