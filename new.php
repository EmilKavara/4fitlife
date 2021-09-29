<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "baza";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$txtPhoneNum =$_POST['txtPhoneNum'];
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtCode = $_POST['txtCode'];

$sql="SELECT * FROM tabela WHERE code='".$txtCode."' AND name='".$txtName."'";
$rs=mysqli_query($conn,$sql);
if(mysqli_num_rows($rs)>=1)
{
    echo"User already exists";
}

else
{

    $sql = "INSERT INTO `tabela` (`name`, `email`, `phoneNum`, `code`) VALUES ('" . $txtName . "','" . $txtEmail . "','" . $txtPhoneNum . "','" . $txtCode . "')";

    $rs = mysqli_query($conn, $sql);
}



?>