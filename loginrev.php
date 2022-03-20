<html>
    <body>
<?php
$username=$_POST['username'];
$password=$_POST['password'];


 
 $conn = new mysqli("localhost","root","","lib");
   $sql = "SELECT * FROM login WHERE username='$username'";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      // echo "username: " . $row["username"]. " - password: " . $row["password1"]. " " . $row["role"]. "<br>";
      
          if($row["username"]=="admin" && $row["password"]=="123"){
           // echo "hi admin";
           header("Location:/booklocator/admindash.php");
        }
        
        elseif ($row["username"]=="$username" && $row["password"]=="$password") {
          // echo "hi" . $username;
          header("Location:/booklocator/userdash.php");
        } 

        else {
          echo"Login Info Incorrect!" . "</br>";
          
         }
    }
  }

   mysqli_close($conn);
?>
<a href="login.php">Go Back</a>
</body>
</html>
