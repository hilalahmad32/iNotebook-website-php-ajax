<?php

include "config.php";
session_start();
if (isset($_POST["title"]) || isset($_POST["note"])) {
    $user_id="";
    if (isset($_SESSION["user_id"])) {
        $user_id .= $_SESSION["user_id"];
    }
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $notes = mysqli_real_escape_string($conn, $_POST["note"]);
    $sql = "INSERT INTO notes (users_id,title,note) VALUES ({$user_id},'{$title}','{$notes}')";
    if (mysqli_query($conn, $sql)) {
        echo  1;
    } else {
        echo 0;
    }
}
