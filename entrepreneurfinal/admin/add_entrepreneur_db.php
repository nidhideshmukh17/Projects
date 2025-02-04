<?php
// Include database connection
include 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = hash('sha512', $_POST['password']); // Encrypt password using SHA-512
    $mobile = $_POST['mobile'];

    // SQL query to insert data into entrepreneur table
    $sql = "INSERT INTO pitcher (name, email, password, mobile) VALUES ('$name', '$email', '$password', '$mobile')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
alert('Added Successfully!!');
window.location.href='manageentrepreneur.php';
</script>";
    } else {
        // Redirect to error page or display error message
        header("Location: error.php");
        exit();
    }
}

// Close database connection
$conn->close();
?>
