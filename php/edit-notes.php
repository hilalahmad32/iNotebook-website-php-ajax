<?php 

session_start();
include "config.php";

if(isset($_POST["id"])){

    $id=$_POST["id"];

    $sql="SELECT * FROM notes WHERE id='{$id}'";
    $run_sql=mysqli_query($conn,$sql);
    $output="";
    if(mysqli_num_rows($run_sql) > 0){
        while($row=mysqli_fetch_assoc($run_sql)){
            $output .=" <div class='form-group'>
            <label for='pwd'>Title:</label>
            <input type='text' value='{$row["title"]}' class='form-control' name='title' placeholder='Enter title' id='title'>
            <input type='hidden' value='{$row["id"]}' class='form-control' name='id' placeholder='Enter id' id='id'>
        </div>
        <div class='form-group'>
            <label for='note'>Note:</label>
            <textarea name='note' id='note' cols='30' rows='10' class='form-control'>{$row["note"]}</textarea>
        </div>";
        }
        echo $output;
    }
}



?>





