

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
                    <form id="register">
                        <div class="card-header">
                            <h3>Register</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="email">Username:</label>
                                <input type="username" class="form-control" name="username" placeholder="Enter username" id="username">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter password" id="password">
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                        <span>  Already Account ? <a href="login.php">Login</a> </span>
                            <button type="submit" class="btn btn-primary ">Register</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/action.js"></script>
</body>


</html>