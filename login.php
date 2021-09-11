<?php
session_start();
if (isset($_COOKIE["email"])) {
    echo $_COOKIE["email"];
}
if (isset($_SESSION["username"])) {
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
                    <div class="card-header">
                        <h3>Login</h3>
                    </div>
                    <form id="login">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="pwd">Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php if (isset($_COOKIE["email"])) {
                                                                                                                            echo $_COOKIE["email"];
                                                                                                                        } ?>" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter password" value="<?php if (isset($_COOKIE["password"])) {
                                                                                                                                    echo $_COOKIE["password"];
                                                                                                                                } ?>" id="password">
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="rememberme" type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <span> If You Have No Account ? <a href="register.php">Create Acount</a> </span>
                            <button type="submit" class="btn btn-primary ">Submit</button>
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