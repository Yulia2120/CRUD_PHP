<?php
include 'config.php';

if(!empty($_GET['id_value'])){
    $id = (int) $_GET['id_value'];
    $delete = "DELETE FROM fruts WHERE id = $id";
    $query = mysqli_query($db, $delete);
    if($query) header('Location: index.php');
    else die("Error");


}