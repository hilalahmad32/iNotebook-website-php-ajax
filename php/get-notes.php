<?php 

session_start();
include "config.php";

if(isset($_SESSION["user_id"])){

    $user_id=$_SESSION["user_id"];

    $sql="SELECT * FROM notes WHERE users_id='{$user_id}'";
    $run_sql=mysqli_query($conn,$sql);
    $output="";
    $i=1;
    if(mysqli_num_rows($run_sql) > 0){
        $output .="  <div class='row'>";
        while($row=mysqli_fetch_assoc($run_sql)){
            $output .="<div class='col-xl-3 my-3 col-md-4 col-sm-12'>
            <div class='card'>
                <div class='card-header'>
                    Note {$i}
                </div>
                <div class='card-body'>
                    <h4>{$row["title"]}</h4>
                    <p>{$row['note']}</p>
                </div>
                <div class='card-footer d-flex justify-content-between'>
                    <button type='button' data-id='{$row["id"]}' id='edit-notes' class='btn btn-primary' data-toggle='modal' data-target='#editModel'>
                        Edit
                    </button>
                    <button id='delete-notes' data-id='{$row["id"]}' class='btn btn-danger'>delete</button>
                </div>
            </div>
        </div>";
        $i++;

        }
        $output .="</div>";
        echo $output;
    }else{
        echo "<h1 class='text-center'>Record Not Found</h1>";
    }
}



?>





