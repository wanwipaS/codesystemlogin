<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register_db";

//create connection สร้างการเชื่อมต่อ
$conn = mysqli_connect($servername,$username,$password,$dbname);

//check การเชื่อมต่อ
if(!$conn){
die("Connection failed ".mysqli_connect_error());
}

?>