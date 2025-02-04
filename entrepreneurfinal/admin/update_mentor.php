<?php
include 'db.php';


// Check if form is submitted

    // Collect form data
    $id = $_POST['mentor_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $field_of_expertise = $_POST['expertise'];
    $mobile = $_POST['mobile'];



    // SQL query to update mentor data in the database
    $sql = "UPDATE `mentor` SET `name`='$name', `email`='$email', `field_of_expertise`='$field_of_expertise', `mobile`='$mobile' WHERE `id`=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
alert('Updated successfully!!');
window.location.href='managementor.php';
</script>";
    } else {

        echo "Error updating mentor: " . $conn->error;
    }


?>