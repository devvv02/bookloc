<html>
<head>
</head>
<body>
<?php

$conn = new mysqli("localhost","root","","lib");

if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
} 


$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];




$sql = "INSERT INTO `login`(`name`, `username`, `password`) VALUES ('$name','$username','$password')";





if ($conn->query($sql) === TRUE) {
  echo "User Sign-Up Successful " . "<br>";
  echo " Please <a href=login.php> LOGIN</a> With Your Account :D";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
