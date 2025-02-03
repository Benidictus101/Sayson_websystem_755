<?php
$servername= "localhost";
$username= "root";
$password= "";
$database= "samplelogin";

// create connection
$conn = new mysqli($servername, $username, $password, $database);

// check connection
if($conn -> connect_error){
    die("connection failed" . $coon -> connect_error);
}

?>