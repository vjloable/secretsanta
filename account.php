<?php
include "scripts\session_control.inc";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5d09c7d46f.js" crossorigin="anonymous"></script>
    <style>
        .glow {
            box-shadow: 0 0 14px #484747;
            border-radius: 2%;
        }

        .breadcrumb {
            background-color: transparent;
        }

        .btn-outline-light:hover {
            background-color: rgb(255, 100, 100);
            color: white;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            font-family: 'FontAwesome';
            content: "\f054" !important;
            color: #c6c6c6;
        }

        .button-glow {
            box-shadow: 0 0 5px #484747;
            border-radius: 5%;
        }

        .tooltip-text {
            visibility: hidden;
            position: absolute;
            z-index: 2;
            width: 200px;
            color: white;
            font-size: 12px;
            background-color: #192733;
            border-radius: 10px;
            padding: 10px 15px 10px 15px;
        }

        .tooltip-text::before {
            content: "";
            position: absolute;
            transform: rotate(45deg);
            background-color: #192733;
            padding: 5px;
            z-index: 1;
        }

        .hover-text:hover .tooltip-text {
            visibility: visible;
        }

        #right {
            top: -8px;
            left: 120%;
        }

        #right::before {
            top: 28%;
            left: -2%;
        }

        .hover-text {
            position: relative;
            display: inline-block;
            font-family: Arial;
            text-align: center;
            margin-left: 1%;
        }

        .dot {
            width: 23%;
            padding-bottom: 0%;
            border-radius: 50%;
            background-color: #f0f0f0;
            margin-top: 0.5%;
        }

        .blue {
            color: blue;
        }

        .gray {
            color: gray;
        }
    </style>
</head>

<body style="background-color: rgb(255, 100, 100);">
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger" style="height: 7vh">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-weight: 900;" href="#">🤫SecretSanta</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="dropdown">
                <button class="btn dropdown-toggle" style="color: white;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Account Settings</a>
                    <div class="dropdown-divider" style="background-color: #555; height: 1px; margin: 5px 0;"></div>
                    <a class="dropdown-item" href="#" style="color: red;">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid" style="height: 93vh;">
        <div class="container" style="min-height: 70%;display: flex;align-items: center;">
            <div class="card mx-auto glow" style="width:70%;max-width: 600px; padding: 20px;">
                <div class="row">
                    <div>
                        <div class="d-flex justify-content-center" style="text-align: center;">
                            <span class="dot bg-danger" style="font-size: 80px; position:relative;">
                                <div class="m-auto h-100 text-light" style="font-weight:900; text-align:center;">
                                    V
                                </div>
                            </span>
                        </div>
                        <h2 class="card-title text-center" style="font-weight: 900; color: #484747;">Signup Form</h2>
                    </div>
                    <div>
                        <p class="text-danger text-center">
                            <?php
                            if (isset($_GET['error_msg'])) {
                                echo "* " . urldecode($_GET['error_msg']) . ".";
                            }
                            ?>
                        </p>
                        <form method="post">
                            <div class="form-group">
                                <!-- <div class="d-flex justify-content-between">
                                    <div>
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope-o fa-fw pr-2"></i>
                                        </span>
                                        <label for="email" style="font-weight: 900; color: #484747;">Email:</label>
                                    </div>
                                    <div>
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </div>
                                </div> -->

                                <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw pr-2"></i></span><label for="email" style="font-weight: 900; color: #484747;">Email:</label>
                                <i id="email_edit" class="fa fa-edit gray" style="cursor: pointer;" aria-hidden="true"></i>
                                <input type="email" class="form-control" id="email" name="email" value="clutchmamba24@gmail.com" required>
                                <br>
                                <span class="input-group-addon"> <i class="fa fa-user pr-1" aria-hidden="true"></i></span><label for="name" style="font-weight: 900; color: #484747;"> Name:</label>
                                <i id="name_edit" class="fa fa-edit gray" aria-hidden="true"></i>
                                <input type="text" class="form-control" id="name" name="name" value="Kobe" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success btn-block" formaction="/secretsanta/scripts/signup_action.php">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="d-flex justify-content-center" style="text-align: center;">
            <span class="dot " style="font-size: 15vw; position:relative;">
                <div class="m-auto h-100 " style="position:absolute; left:22%; bottom:10%; font-weight:900;">
                    V
                </div>
            </span>
        </div> -->
    </div>

    <script>
        var email_edit = document.getElementById("email_edit");
        var email_input = document.getElementById("email");
        email_input.disabled = true;
        var name_edit = document.getElementById("name_edit");
        var name_input = document.getElementById("name");
        name_input.disabled = true;

        email_edit.addEventListener("click", function() {
            console.log("triggered");
            if (email_edit.classList.contains("gray")) {
                console.log("i on");
                email_edit.classList.remove("gray");
                email_edit.classList.add("blue");
                email_input.disabled = !email_input.disabled;
            } else if (email_edit.classList.contains("blue")) {
                console.log("i off");
                email_edit.classList.remove("blue");
                email_edit.classList.add("gray");
                email_input.disabled = !email_input.disabled;
            }
        });

        name_edit.addEventListener("click", function() {
            console.log("triggered");
            if (name_edit.classList.contains("gray")) {
                console.log("i on");
                name_edit.classList.remove("gray");
                name_edit.classList.add("blue");
                name_input.disabled = !name_input.disabled;
            } else if (name_edit.classList.contains("blue")) {
                console.log("i off");
                name_edit.classList.remove("blue");
                name_edit.classList.add("gray");
                name_input.disabled = !name_input.disabled;
            }
        });
    </script>
</body>

</html>