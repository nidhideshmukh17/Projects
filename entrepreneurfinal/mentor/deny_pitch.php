<?php

include 'db.php';

$id = $_GET['id'];

$sql = "UPDATE `pitches` SET `approval_status` = 'not_approved' WHERE `id` = '$id';";

if ($conn->query($sql) === TRUE) {
  echo "<script>
alert('Pitch Rejected!!');
window.location.href='approvedpitches.php';
</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



?>