<?php

include "config.php";
if (isset($_POST["id"])) {
    $id=$_POST["id"];
    $sql = "DELETE FROM notes WHERE id='{$id}'";
    if (mysqli_query($conn, $sql)) {
        echo  1;
    } else {
        echo 0;
    }
}
