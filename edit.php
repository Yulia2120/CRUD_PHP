<?php
include 'config.php';

if(!empty($_POST)){
    foreach ($_POST as $key => $value){
        $_POST[$key] = mysqli_real_escape_string($db, $value);
    }
    extract($_POST);
    $id = (int) $_GET['up_value'];
    $update = "UPDATE `fruts` SET `name` = '$name', `country` = '$country', `price` = '$price' WHERE `id` = $id";
    $query = mysqli_query($db, $update);
    if($query) header('Location: index.php');

//if(!empty($_GET['up_value'])){
   // $id = (int) $_GET['up_value'];

}