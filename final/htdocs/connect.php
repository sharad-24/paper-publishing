<?php
$n1=$_POST["firstname"];
$n2=$_POST["lastname"];
$n3=$_POST["email"];
$n4=$_POST["subject"];
$n5=$_POST["message"];

$conn = mysqli_connect('localhost', 'root','', 'test1');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (mysqli_query($conn,"INSERT INTO `registration1` 
VALUES ('".$n1."', '".$n2."', '".$n3."', '".$n4."', '".$n5."')")) {
    echo "Registration Successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
