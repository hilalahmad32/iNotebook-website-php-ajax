
<?php 
session_start();

if(isset($_SESSION["username"])){
    header("location:dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/img.jpg" type="image/x-icon">

    <link rel="stylesheet" href="css/bootstrap.css">
    <title> iNoteBook </title>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-xl-6 col-md-8 col-sm-12 offset-xl-3 offset-md-2 offset-sm-0">
            <div class="card">
                <div class="card-header"><h3>iNoteBook App</h3></div>
                <div class="card-body">
                    <img src="image/img.jpg" style="width: 100%;" alt="">
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="login.php" class="btn btn-success w-25">Login</a>
                    <a href="register.php" class="btn w-25 btn-primary">Register</a>
                </div>
            </div>
            </div>
            
        </div>
    </div>
</body>
</html>