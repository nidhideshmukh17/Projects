<?php


include 'db.php';
include 'header.php';


// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $pitch_id = $_POST['pid'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Insert session booking data into database
    $sql = "UPDATE `pitches` SET `approving_mentor_name`='$sessionemail',`meetdate`='$date',`meettime`='$time' , `approval_status`='booked' , `meetlink`='$sessionlink' WHERE `id`='$pitch_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Session booked successfully!');
                window.location.href='allpitch.php';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



?>