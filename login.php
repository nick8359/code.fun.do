
<?php
$servername ="localhost";
$username = "barua";
$password = "barua";
$dbname = "honey";

//Fields From Form

$name = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $pass = test_input($_POST["pass"]);
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
$sql="SELECT * FROM signup WHERE name='$name'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count==1){
    $row = mysql_fetch_assoc($result);
    if (crypt($pass, $row['pass']) == $row['pass']){
        session_register("name");
        session_register("pass"); 
        echo "Login Successful";
        include 'computer.php';
        return true;
    }
    else {
        echo "Wrong Username or Password";

        return false;
    }
}
else{
    echo "Wrong Username or Password";
    return false;
}


?> 
