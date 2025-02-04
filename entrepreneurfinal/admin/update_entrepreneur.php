<?php
// Include database connection
include 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $entrepreneur_id = $_POST['entrepreneur_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // SQL query to update entrepreneur data in the database
    $sql = "UPDATE pitcher SET name='$name', email='$email', mobile='$mobile' WHERE id='$entrepreneur_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
alert('Updated Successfully');
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
