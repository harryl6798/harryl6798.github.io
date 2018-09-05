<?php

$q1 = $_POST["theCreatedUser"];
$mysqli = new mysqli('mysql.eecs.ku.edu', "h304l888", "Aithuz7e", "h304l888");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "INSERT INTO Users (user_id) VALUES ('$q1')";

if ($mysqli->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$mysqli->close();
?>
