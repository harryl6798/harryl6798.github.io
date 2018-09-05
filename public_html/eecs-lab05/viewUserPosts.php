<?php
$mysqli = new mysqli('mysql.eecs.ku.edu', "h304l888", "Aithuz7e", "h304l888");

$username = $_POST["test"];

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}



$query = "SELECT post_id, content FROM Posts WHERE author_id='" . $username ."'";


if ($values = $mysqli->query($query)) {
  if($values->num_rows > 0){
  echo "<table border='8'> <tr><th><h1> Posts </h1></th></tr>";

    while($therow = $values->fetch_assoc())
    {
      echo "<tr><td>" . $therow["content"]. "</tr></td>";
    }
    echo "</table>";

} 
else {
    echo "Error: The User has no posts ";
  }
}


$mysqli->close();
?>