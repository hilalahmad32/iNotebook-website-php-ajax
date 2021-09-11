<?php 

session_start();
include "config.php";

if(isset($_SESSION["user_id"])){

    $user_id=$_SESSION["user_id"];

    $sql="SELECT * FROM notes WHERE users_id='{$user_id}'";
    $run_sql=mysqli_query($conn,$sql);
    $result=mysqli_num_rows($run_sql);
    echo $result;

}

?>





