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
    $ideaName = $_POST['ideaName'];
    $description = $_POST['description'];
    $fundingRequired = $_POST['fundingRequired'];
    $areaCategory = $_POST['areaCategory'];
    $video = $_POST['video'];

    // Insert pitch data into database
    $sql = "INSERT INTO `pitches` (`name`, `desc`, `fund`, `area`,`uid`,`video`)
            VALUES ('$ideaName', '$description', '$fundingRequired', '$areaCategory','$sessionemail','$video')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
alert('Submitted');
window.location.href='mypitch.php';
</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
