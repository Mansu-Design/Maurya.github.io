<?php

$conn = mysqli_connect('localhost', 'root');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($conn, 'form');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];


$sql = "INSERT INTO user (user,email,mobile,comment)
VALUES ('$user', '$email', '$mobile', '$comment')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

header('location:contact.php');
header('location:index.php');

mysqli_close($conn);
?>