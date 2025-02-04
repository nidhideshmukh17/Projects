<?php
session_start();
$sessionname = $_SESSION['name'];
if($sessionname=="")
{
  
}
$sessionemail = $_SESSION['email'];
// Include database connection
include 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $pitch_id = $_POST['pitch_id'];
    $ideaName = $_POST['ideaName'];
    $description = $_POST['description'];
    $fundingRequired = $_POST['fundingRequired'];
    $areaCategory = $_POST['areaCategory'];
    $video = $_POST['video'];

    // Update pitch data in the database
    $sql = "UPDATE `pitches` SET `name` = '$ideaName', `desc` = '$description', `fund` = '$fundingRequired', `area` = '$areaCategory', `video` = '$video' WHERE `id` = $pitch_id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
alert('Pitch Updated Successfully');
window.location.href='mypitch.php';
</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
