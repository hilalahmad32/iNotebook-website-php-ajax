<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("location:login.php");
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
<style>
    * {
        margin: 0;
        padding: 0;
    }
</style>

<body>
    <div class="container-fluid bg-dark p-5 d-md-flex justify-content-md-between text-white">
        <?php

        if (isset($_SESSION["username"])) {
        ?>
            <h4> Hello <?php echo $_SESSION["username"] ?> Welcome to iNoteBook App</h4>

        <?php
        }

        ?>
        <button id="logout" class="btn btn-danger">Logout</button>
    </div>
    <div class="container my-5">

        <div class="card">
            <div class="card-header">
                <div class="d-sm-flex justify-content-sm-between">
                    <h4> Your Notes ( <span id="total-notes"></span> )</h4>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModel">
                        Add Notes
                    </button>
                </div>
            </div>
        </div>


    </div>
    <div class="container">
        <div id="get-notes"></div>


    </div>
    <!-- The Modal -->
    <div class="modal fade" id="myModel">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Note</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form id="add-notes">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="title" class="form-control" name="title" placeholder="Enter title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="desc">Email:</label>
                            <textarea name="note" id="note" placeholder="Enter Note" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModel">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update Note</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" id="update-notes">
                        <div id="edit-note"></div>
                        <button type="submit" class="btn btn-primary ">Update</button>
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