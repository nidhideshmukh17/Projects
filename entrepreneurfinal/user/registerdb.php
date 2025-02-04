<?php

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = hash('sha512', $_POST['password']);
$mobile = $_POST['number'];


$sql = "INSERT INTO `pitcher`(`name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$password')";

if ($conn->query($sql) === TRUE) {
  echo "<script>
alert('Registered Successfully');
window.location.href='index.php';
</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



?>