<?php

include 'db.php';


$email = $_POST['email'];
$password = $_POST['password'];
$password = hash('sha512', $password);

$sql = "SELECT * FROM `admin` WHERE `email`='$email' and `password`='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    session_start();
  $_SESSION['name']= $row["username"];
  $_SESSION['email'] = $email;
  echo "<script>
alert('Welcome');
window.location.href='dashboard.php';
</script>";
  }
} else {
  echo "<script>
alert('Invalid Credentails');
window.location.href='index.php';
</script>";
}

?>