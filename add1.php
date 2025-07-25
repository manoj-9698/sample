<?php
include("config.php"); // include DB connection

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];
    $Age = $_POST['Age'];
    $mobile = $_POST['mobile'];
    $Hospital = $_POST['Hospital'];

    // Insert into database
    $sql = "INSERT INTO patient (name, address, gender, blood_group, Age, mobile,Hospital)
            VALUES ('$name', '$address', '$gender', '$blood_group', '$Age', '$mobile', '$Hospital')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the donar list page
        header("Location: patient_list.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
