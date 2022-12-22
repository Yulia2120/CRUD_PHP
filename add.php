<?php
include 'config.php';


if(!empty($_POST)){
    foreach ($_POST as $key => $value){
        $_POST[$key] = mysqli_real_escape_string($db, $value);
    }
extract($_POST);
$insert = "INSERT INTO `fruts`(`name`, `country`, `price`) VALUES ('$name', '$country', '$price')";
$query = mysqli_query($db, $insert);
if($query) header('Location: index.php');

}



