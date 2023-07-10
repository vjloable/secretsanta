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
                    Vince
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/secretsanta/account.php">Account Settings</a>
                    <div class="dropdown-divider" style="background-color: #555; height: 1px; margin: 5px 0;"></div>
                    <a class="dropdown-item" href="#" style="color: red;">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid" style="height: 93vh;">
        <button class="btn btn-outline-dark mt-1 ml-1" style="border-color: rgb(255, 100, 100);" href="/secretsanta/welcome.php">
            <i class="fa fa-arrow-left fa-2x p-3" aria-hidden="true" style="color: white; cursor: pointer;"></i>
        </button>
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
                        <div class="d-flex justify-content-center">
                            <div>
                                <h2 class="card-title text-center" style="font-weight: 900; color: #484747;">Profile</h2>
                            </div>
                        </div>
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
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw pr-2"></i></span><label for="email" style="font-weight: 900; color: #484747;">Email:</label>
                                    </div>
                                    <i id="email_edit" class="fa fa-edit gray" style="cursor: pointer;" aria-hidden="true"></i>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" value="vince@gmail.com" required>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <span class="input-group-addon"> <i class="fa fa-user pr-1" aria-hidden="true"></i></span><label for="name" style="font-weight: 900; color: #484747;"> Name:</label>
                                    </div>
                                    <i id="name_edit" class="fa fa-edit gray" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" value="Vince" required>
                            </div>
                            <br>
                            <button type="submit" id="confirm_button" class="btn btn-success btn-block" formaction="/secretsanta/scripts/signup_action.php">Confirm</button>
                            <button type="submit" id="delete_button" class="btn btn-danger btn-block" formaction="/secretsanta/scripts/signup_action.php">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var email_edit = document.getElementById("email_edit");
        var email_input = document.getElementById("email");
        email_input.disabled = true;
        var name_edit = document.getElementById("name_edit");
        var name_input = document.getElementById("name");
        name_input.disabled = true;
        var confirm_button = document.getElementById("confirm_button");
        confirm_button.disabled = true;
        var delete_button = document.getElementById("delete_button");

        email_edit.addEventListener("click", function() {
            toggleInputActivation(email_input, email_edit);
            toggleConfirmButtonActivation();
        });

        name_edit.addEventListener("click", function() {
            toggleInputActivation(name_input, name_edit);
            toggleConfirmButtonActivation();
        });

        confirm_button.addEventListener("click", function(event) {
            if (!confirm("Are you sure you to change your information?")) {
                event.preventDefault();
            }
        });

        delete_button.addEventListener("click", function(event) {
            if (!confirm("DELETING your account removes you from all ROOMS and therefore DRAWS. Are you REALLY sure?")) {
                event.preventDefault();
            }
        });

        function toggleInputActivation(input, editIcon) {
            if (editIcon.classList.contains("gray")) {
                editIcon.classList.remove("gray");
                editIcon.classList.add("blue");
                input.disabled = false;
            } else if (editIcon.classList.contains("blue")) {
                editIcon.classList.remove("blue");
                editIcon.classList.add("gray");
                input.disabled = true;
            }
        }

        function toggleConfirmButtonActivation() {
            if (!email_input.disabled || !name_input.disabled) {
                confirm_button.disabled = false;
            } else {
                confirm_button.disabled = true;
            }
        }
    </script>
</body>

</html>