<?php

include "config.php";
session_start();
if (isset($_POST["id"]) || isset($_POST["title"]) || isset($_POST["note"])) {
    $id=$_POST["id"];
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $notes = mysqli_real_escape_string($conn, $_POST["note"]);
    $sql = "UPDATE notes SET title='{$title}' , note='{$notes}' WHERE id='{$id}'";
    if (mysqli_query($conn, $sql)) {
        echo  1;
    } else {
        echo 0;
    }
}
