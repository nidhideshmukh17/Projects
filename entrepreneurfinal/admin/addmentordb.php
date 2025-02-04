<?php
include '../db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = hash('sha512', $_POST['password']); // Encrypt password using SHA-512
    $department = $_POST['expertise'];
    $mobile = $_POST['mobile'];
    $meet = $_POST['meet'];

    // SQL query to insert data into database
    $sql = "INSERT INTO mentor(`name`, `email`, `password`, `field_of_expertise`,`mobile`,`meetlink`) VALUES ('$name', '$email', '$password', '$department','$mobile','$meet')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Mentor Created Successfully');
            window.location.href='dashboard.php';
            </script>";
    } else {
        echo "<script>
            alert('Something Went Wrong');
            window.location.href='dashboard.php';
            </script>";
    }
}

?>
