<?php
include "scripts\session_control.inc";
if (!(isset($_SESSION["room_state"]) && $_SESSION["room_state"] == 2)) {
    header("Location: /secretsanta/scripts/session_join_control.php");
}
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
        .table-wrapper-scroll-y {
            max-height: 200px;
            overflow-y: auto;
        }

        .table-wrapper-scroll-y table {
            margin-bottom: 0;
        }

        .table-wrapper-scroll-y thead th {
            position: sticky;
            top: 0;
            background-color: #fff;
            z-index: 1;
        }

        .breadcrumb {
            background-color: transparent;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            font-family: 'FontAwesome';
            content: "\f054" !important;
            color: #c6c6c6;
        }

        .glow {
            box-shadow: 0 0 10px #484747;
            border-radius: 2%;
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

    <div class="container-fluid" style="height: 93vh;">
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
                    <li class="breadcrumb-item active" style="color: white;">LOCKED-IN STATE </li>
                    <li class="breadcrumb-item" style="color: #505050;">REVELATION STATE</li>
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
        <div class="d-grid gap-2 text-center">
        <?php
        if ($_SESSION["user_id"] == $_SESSION["host_id"]) {
            echo '
            <button id="endRoom" type="button" name="endRoom" class="btn btn-danger button-glow mr-1" role="button">End Room</button>
            <button id="nextButton" type="button" class="btn btn-light  button-glow ml-1" style="color:red;" role="button">Next State</button>
            ';
            }
        ?>
        </div>
        <div class="text-center mt-3">
            <h3 class="text-light" style="font-weight:600;">You are the</h3>
            <h2 class="text-light" style="font-weight:900;">Secret Santa of:</h2>
            <h1 class="text-light" style="font-weight:900;">
                <?php
                include ".\scripts\get_recipient.php";
                $recipient = getRecipient($_SESSION['user_id'], $_SESSION['room']);
                $_SESSION['draw_id'] = $recipient['draw_id'];
                echo $recipient['name'];
                ?>
            </h2>
            <br>
        </div>
        <div style="height: 1px;background-color: white; width: 35%; margin: 0 20% 10px 32.5%;"></div>
        <div>
            <div class="container" style="width: 100%;">
                <div class="glow" style="width: 40%;background-color: white; margin:auto; padding-top:1%; padding-bottom: 2%;">
                    <div class="table-wrapper-scroll-y" style="background-color: white; margin: 0% 5% 0% 5%;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Their Wishlist 🎉</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <div class="table-wrapper">
                                    <?php
                                    echo getRecipientWishlist($_SESSION['user_id'], $_SESSION['room']);
                                    ?>
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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

        $("#nextButton").click(function() {
            $.ajax({
                url: "./scripts/join_reveal_action.php",
                type: "POST",
                success: function(response) {
                    console.log(response);
                    window.location.href = "/secretsanta/scripts/session_join_control.php";
                }
            });
        });
    });

    // var delete_room = document.getElementById("delete_room");
    // var next_state = document.getElementById("next_state");

    // delete_room.addEventListener("click", function(event) {
    //     if (!confirm("Are you sure you to END the ROOM?")) {
    //         event.preventDefault();
    //     }
    // });

    // next_state.addEventListener("click", function(event) {
    //     if (!confirm("Have Y'ALL bought your gifts? If so, please do continue.")) {
    //         event.preventDefault();
    //     }
    // });

    // delete_item.addEventListener("click", function(event) {
    //     if (!confirm("Are you sure to REMOVE the items from your wishlist/s?")) {
    //         event.preventDefault();
    //     }
    // });
</script>
</html>