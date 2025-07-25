<?php
include("config.php"); // include DB connection

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];
    $Age = $_POST['Age'];
    $mobile = $_POST['mobile'];

    // Insert into database
    $sql = "INSERT INTO donar (name, address, gender, blood_group, Age, mobile)
            VALUES ('$name', '$address', '$gender', '$blood_group', '$Age', '$mobile')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the donar list page
        header("Location: donar_list.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
