<?php
$n1=$_POST["mail"];

$conn = mysqli_connect('localhost', 'root','', 'test2');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (mysqli_query($conn,"INSERT INTO `mail` 
VALUES ('".$n1."')")) {
    echo "Registration Successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
