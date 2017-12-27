<?php
//Server Authenticating
$servername ="localhost";
$username = "barua";
$password = "barua";
$dbname = "honey";

//Securing Post DATA
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
  	$name="";
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
  	$mail="";
    $email = test_input($_POST["email"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$hash = md5( rand(0,1000) );
$pass = rand(1000,5000);//Genearte Random Password
$pwd=md5($pass);//Decrypt the password


if($name!=""&&$email!="")
{

$sq="SELECT * from signup where name = '$name'";//check for existing user
$result=$conn->query($sq);
$count=$result->num_rows;

if($count===0)//If No User Execute It
{
$sql = "INSERT INTO signup ( NAME,PASSWORD,EMAIL)
VALUES ('$name','$pwd','$email')";
if ($conn->query($sql) === TRUE) {

	$msg="Check your Mail For Login Credentials";
   include "signup.php";
   //include "mail.php"
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
//If User Already Exists return With Message
else
{
	$msgType="User Already Exixts";
  include "signup.php";
}
}
//If Input Fields Are Left Empty
else
{
	include "signup.php";
}

?>