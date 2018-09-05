<?php

$username = $_POST["theCreatedUser"];
$thepost = $_POST["thePost"];

$mysqli = new mysqli('mysql.eecs.ku.edu', "h304l888", "Aithuz7e", "h304l888");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if(strlen($username) ==0)
{
  echo("No Username Inputted");
  exit();
}

if(strlen($thepost) ==0)
{
  echo("No Post Inputted");
  exit();
}

$query = "SELECT user_id from Users where user_id '" .$username . "'";



if ($mysqli->query($query)) {
    echo "The User Doesn't EXIST!";
} else {
  $query = "INSERT INTO Posts (content, author_id) VALUES('" .$thepost . "' , '" .$username."')";
  $mysqli->query($query);
  echo "Post Created";
}

$mysqli->close();
?>
