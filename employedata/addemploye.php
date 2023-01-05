<?php 

include "inc\conn.php";

$name = $_POST['name'] ;
$email = $_POST['email'] ;
$address = $_POST['address'] ;
$phone = $_POST['phone'] ;
$position = $_POST['position'] ;
$department = $_POST['department'] ;
$salary = $_POST['salary'] ;
$age = $_POST['age'] ;
$gender = $_POST['gender'];
$militarystatus = $_POST['militarystatus'] ;
$relationstatus = $_POST['relationstatus'] ;
$hiredate = $_POST['hiredate'] ;
$attendencedate = $_POST['attendencedate'] ;

$imagename = $_FILES['image']['name'];
$imgloc = $_FILES['image']['tmp_name'];
$r = rand();
$newloc = "images/$r$imagename";
move_uploaded_file($imgloc, $newloc);


$q = "INSERT INTO `asdfg`(`name`, `email`) VALUES ('[value-1]','[value-2]')";

$addedrecord = $conn ->query($q);


if ($addedrecord) {
    header("Location: index.php");
};