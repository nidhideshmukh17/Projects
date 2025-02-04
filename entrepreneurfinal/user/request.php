<?php

include 'db.php';
include 'header.php';


$uid = $_GET['uid'];
$mid = $_GET['id'];


$sql = "INSERT INTO `requestcall`(`uid`, `mid`) VALUES ('$uid','$mid')";

if ($conn->query($sql) === TRUE) {
  echo "<script>
alert('Call Request sent !!');
window.location.href='viewmentor.php';
</script>";
} else {
echo "<script>
alert('Something went wrong!!');
window.location.href='viewmentor.php';
</script>";
}


?>