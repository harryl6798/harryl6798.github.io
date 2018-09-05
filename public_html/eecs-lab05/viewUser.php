<?php
$mysqli = new mysqli('mysql.eecs.ku.edu', "h304l888", "Aithuz7e", "h304l888");



if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$query = "SELECT user_id from Users order by user_id";


echo "<table border='8'> <tr><th><h1> Usernames</h1></th></tr>";
if ($values = $mysqli->query($query)) {

    while($therow = $values->fetch_assoc())
    {
      echo "<tr><td>" . $therow["user_id"]. "</tr></td>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "</table>";


$mysqli->close();
?>
