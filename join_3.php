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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
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
    </style>
</head>

<body style="background-color: rgb(255, 100, 100);">
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger" style="height: 7vh">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-weight: 900;" href="#">🤫SecretSanta</a>
            <div class="dropdown">
                <form action="post">
                    <button class="btn dropdown-toggle" style="color: white;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bars"></i>
                        <?php
                        echo $_SESSION['name'];
                        ?>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/secretsanta/account.php">Account Settings</a>
                        <div class="dropdown-divider" style="background-color: #555; height: 1px; margin: 5px 0;"></div>
                        <button class="dropdown-item" style="color: red;" formaction=".\scripts\logout_action.php">Logout</button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid" style="height: 93vh; ">
        <div class="container-fluid d-flex justify-content-between">
            <div style="position: relative;">
                <div class="d-flex " style="position: absolute;top: 0;left: 0;">
                    <a class="hover-text btn btn-dark mt-1 ml-1" style="border-color: rgb(255, 100, 100);" href="/secretsanta/lobby.php">
                        <i class="fa fa-arrow-left " aria-hidden="true" style="color: white; cursor: pointer;"></i>
                        <span class="tooltip-text" style="width: 100px;" id="right">Back to Lobby</span>
                    </a>
                </div>
            </div>
            <nav aria-label="breadcrumb" class="d-flex justify-content-center" style="background-color: transparent;">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item " style="color: #505050;">OPEN STATE</li>
                    <li class="breadcrumb-item" style="color: #505050;">LOCKED-IN STATE</li>
                    <li class="breadcrumb-item active" style="color: white;">REVELATION STATE</li>
                </ol>
            </nav>
            <div>
            </div>
        </div>
        <h4 class="text-center text-light" style="font-weight:900;">Room Code:
            <?php
            echo " " . $_SESSION["room"];
            ?>
        </h4>
        <h5 class="text-center text-light" style="font-weight:900;">Hostname:
            <?php
            echo " " . $_SESSION["host"];
            ?>
        </h5>
        <?php
        if ($_SESSION["user_id"] == $_SESSION["host_id"]) {
            echo '
            <div class="d-grid gap-2 text-center">
                <button id="endRoom" type="button" name="endRoom" class="btn btn-danger button-glow mr-1" role="button">End Room</button>
            </div>
            ';
        }
        ?>
        <div class="row d-flex align-items-center my-5">
            <div class="col d-flex align-items-center justify-content-end" style="height: 70%;">
                <div class="text-center text-dark border bg-white border-white p-5 glow" style="margin-right: 5%; position: sticky;">
                    <h5 style="font-weight: 900;">You are the <br> santa of:</h5>
                    <h2 style="font-weight: 900;">
                    <?php
                    include ".\scripts\get_draw.php";
                    $recipient = getDraw($_SESSION['draw_id']);
                    echo $recipient[0];
                    ?>
                    </h2>
                </div>
            </div>
            <div class="col d-flex align-items-center" style="height: 70%;">
                <div class="text-center text-dark border bg-white border-white p-5 glow" style="margin-left: 5%; position: sticky;">
                    <h5 style="font-weight: 900;">Your Santa <br> is:</h5>
                    <h2 style="font-weight: 900;">
                    <?php
                    $recipient = getDraw($_SESSION['draw_id']);
                    echo $recipient[1];
                    ?>
                    </h2>
                </div>
            </div>
        </div>
        <!-- <div style="display: flex; justify-content: center;">
            <button type="button" class="btn btn-outline-light" style="border: 0px; text-decoration: underline;">
                Exit to Lobby?
            </button>
        </div> -->
    </div>
</body>
<script>
    $(document).ready(function () {
        $("#endRoom").click(function() {
            $.ajax({
                url: "./scripts/end_room_action.php",
                type: "POST",
                success: function(response) {
                    window.location.href = "/secretsanta/lobby.php";
                }
            });
        });
    });

//     var end_room = document.getElementById("end_room");

//     end_room.addEventListener("click", function(event) {
//         if (!confirm("Have Y'ALL received your gifts? If so, please do continue.")) {
//             event.preventDefault();
//         }
//     });

</html>