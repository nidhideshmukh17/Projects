<?php
// Start session
session_start();

// Include database connection
include 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $expertise = $_POST['field_of_expertise'];
    $mobile = $_POST['mobile'];
    $meetlink = $_POST['google_meet_link'];

    // Hash the password using SHA-512
    $hashedPassword = hash('sha512', $password);

    // Insert user data into database
    $sql = "INSERT INTO `mentor` ( `name`, `email`, `mobile`, `field_of_expertise`, `password`, `meetlink`, `status`)
            VALUES ('$fullname', '$email',  '$mobile','$expertise','$hashedPassword', '$meetlink','submitted')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
alert('Registered Please wait for approval');
window.location.href='index.php';
</script>";
    } else {
        // Redirect to error page
        $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
        header("Location: error.php");
        exit();
    }
}

// Close database connection
$conn->close();
?>
