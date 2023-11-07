<?php
require_once('conn.php');

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];

    $query = mysqli_query($conn, "INSERT INTO students VALUES('', '$name', '$phone','$class')") or die(mysqli_error());
    if($query){
        header("Location:index.php");
    }
}


?>