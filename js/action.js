$(document).ready(function () {
    $("#register").on("submit", function (e) {
        e.preventDefault();
        const username = $("#username").val();
        const email = $("#email").val();
        const password = $("#password").val();

        const formdata = new FormData(this);
        if (username == "" || email == "" || password == "") {
            alert("Please fill the field");
        } else {
            $.ajax({
                url: "php/register.php",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: (data) => {
                    if (data == 1) {
                        alert("data add successfully");
                        $("#register").trigger("reset");
                        window.location.href = "/login.php";

                    } else if (data == 2) {
                        alert("Email all ready Exist");
                    } else {
                        alert("something woring");
                    }
                }
            });
        }
    });


    $("#login").on("submit", function (e) {
        e.preventDefault();
        const email = $("#email").val();
        const password = $("#password").val();

        const formdata = new FormData(this);
        if (email == "" || password == "") {
            alert("Please fill the field");
        } else {
            $.ajax({
                url: "php/login.php",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: (data) => {
                    if (data == 1) {
                        alert("Login Successfully");
                        $("#login").trigger("reset");
                        window.location.href = "/dashboard.php";
                    } else {
                        alert("Invalid Username and Password");
                    }
                }
            });
        }
    });


    $("#logout").on("click", function (e) {
        e.preventDefault();
        $.ajax({
            url: "php/logout.php",
            type: "POST",
            success: (data) => {
                alert("logout successfully");
                window.location.href = "/login.php";
            }
        });
    });


    function getNotes() {
        $.ajax({
            url: "php/get-notes.php",
            type: "GET",
            success: (data) => {
                $("#get-notes").html(data);
            }
        });
    }

    getNotes();
    function totalCount() {
        $.ajax({
            url: "php/total-count-notes.php",
            type: "GET",
            success: (data) => {
                $("#total-notes").html(data);
            }
        });
    }
    totalCount()

    $("#add-notes").on("submit", function (e) {
        e.preventDefault();
        const title = $("#title").val();
        const note = $("#note").val();

        const formdata = new FormData(this);
        if (title == "" || note == "") {
            alert("Please fill the field");
        } else {

            $.ajax({
                url: "php/add-notes.php",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: (data) => {

                    if (data == 1) {
                        alert("Notes add Successfully");
                        $("#add-notes").trigger("reset");
                        $("#myModel").modal("hide");
                        totalCount()
                        getNotes();
                    } else {
                        alert("something woring");
                    }
                }
            });
        }
    });


    $(document).on("click", "#edit-notes", function () {
        const id = $(this).data("id");
        $.ajax({
            url: "php/edit-notes.php",
            type: "POST",
            data: { id: id },
            success: (data) => {
                // console.log(data);
                $("#edit-note").html(data);
            }
        });
    });


    $("#update-notes").on("submit", function (e) {
        e.preventDefault();
        const title = $("#edit_title").val();
        const note = $("#edit_note").val();

        const formdata = new FormData(this);
        if (title == "" || note == "") {
            alert("Please fill the field");
        } else {

            $.ajax({
                url: "php/update-notes.php",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: (data) => {

                    if (data == 1) {
                        alert("Notes update Successfully");
                        $("#update-notes").trigger("reset");
                        $("#editModel").modal("hide");
                        totalCount()
                        getNotes();
                    } else {
                        alert("something woring");
                    }
                }
            });
        }
    });


    $(document).on("click", "#delete-notes", function () {
        const id = $(this).data("id");
        $.ajax({
            url: "php/delete-notes.php",
            type: "POST",
            data: { id: id },
            success: (data) => {
                if (data == 1) {
                    alert("Notes Delete Successfully");
                    totalCount()
                    getNotes();
                } else {
                    alert("something woring");
                }
            }
        });
    });
});