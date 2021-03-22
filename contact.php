<?php


require('config.php');


extract($_POST);


$sql = "INSERT into contactus (name,email,phone,comments) VALUES('" . $name . "','" . $email . "','" . $phoneno . "','" . $text. "')";


$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "Thank You For Contacting Us ";


$conn->close();


?>