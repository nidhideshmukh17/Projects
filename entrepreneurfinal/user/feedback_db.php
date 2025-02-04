<?php


include 'db.php';

$mid = $_POST['mid'];
$rate = $_POST['rating'];


$sql = "INSERT INTO `feedback`(`mid`, `rating`) VALUES ('$mid','$rate')";

if ($conn->query($sql) === TRUE) {
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




$sql = "SELECT * FROM `feedback` WHERE `mid`='$mid'";
$result = $conn->query($sql);
$total = 0;
$rating = 0;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $rating = $rating + $row["rating"];
    $total++;
  }
} 

$avg = $rating / $total;



echo $avg;


$sql = "UPDATE `mentor` SET `rating`='$avg' WHERE `email`='$mid'";

if ($conn->query($sql) === TRUE) {
  echo "<script>
alert('Feedback Submitted');
window.location.href='dashboard.php';
</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




?>