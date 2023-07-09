<?php
include "scripts\session_control.inc";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lobby🔥</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5d09c7d46f.js" crossorigin="anonymous"></script>
    <style>
        .glow {
            box-shadow: 0 0 20px #484747;
        }

        .form-control {
            width: 40px !important;
        }

        .card-header {
            font-size: 15px !important;
        }

        .btn-choose {
            width: 253.75px !important;
            height: 146.7px !important;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
            text-align: right;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .navbar {
            height: 7vh;
        }

        @media only screen and (max-width: 595px) {
            .navbar-brand {
                position: relative;
                bottom: 5%;
            }

            .container-small-cm {
                position: relative;
                bottom: 3px;
            }

            .padding-destroyer {
                padding: 0 0 0 0 !important;
            }

            .collapse {
                margin: auto;
            }

            .fillin-div {
                display: none;
            }

            .col {
                margin: 0 0 0 0 !important;
            }

            .small-div {
                flex-direction: column;
                align-items: center;
            }
        }

        @media only screen and (max-height:395px) {
            .navbar {
                height: 40px;
            }
        }
    </style>
</head>

<body style="height: 100%; background-color: rgb(255, 100, 100); color: white; font-weight: 900;">
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger w-100" style="height: 50.5px;">
        <div class="container-fluid container-small-cm">
            <a class="navbar-brand" style="font-weight: 900;" href="#">🤫SecretSanta</a>
            <div class="dropdown">
                <form action="post">
                    <button class="btn dropdown-toggle" style="color: white;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Account Settings</a>
                        <div class="dropdown-divider" style="background-color: #555; height: 1px; margin: 5px 0;"></div>
                        <button class="dropdown-item" style="color: red;" formaction=".\scripts\logout_action.php">Logout</button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <div style="height:93vh;">
        <h1 class=" text-center pt-3" style="font-weight:900">Welcome,
            <?php
            echo $_SESSION['name'];
            ?>!
        </h1>
        <h5 class="text-center pt-1">Signed in as:
            <?php
            echo $_SESSION['email'];
            ?>
        </h5>
        <br>
        <div class="d-flex small-div" style="height:40%; margin-right: 0px; margin-left: 0px;">
            <div class="col p-2 fillin-div"></div>
            <div class="col p-2 text-right h-100 text-center">
                <div class="row align-items-center">
                    <form action="post" class="padding-destroyer">
                        <button class="btn btn-choose btn-outline-light h-100 glow text-center " style="padding: 10% 50px; font-size: 40px; font-weight:900;" role="button" type="button" data-toggle="collapse" data-target="#enterRoomCode">Join
                            <br>
                            <div style="font-size: 11px;">Friends in a room already? </div>
                        </button>
                    </form>
                    <div class="collapse" id="enterRoomCode" style="width: 367.05px;">
                        <br>
                        <div class="card bg-transparent border-light mx-5">
                            <div class="card-header bg-danger border-transparent" style="font-weight: 900; font-size: 1vw;">
                                ENTER 4-DIGIT ROOM CODE
                            </div>
                            <div class="card-body">
                                <form method="post">
                                    <div class="row align-items-center justify-content-around">
                                        <div class="col-2">
                                            <input type="text" class="form-control" min="0" max="9" maxlength="1" pattern="[0-9]{1}" id="text" name="roomcode_a">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" min="0" max="9" maxlength="1" pattern="[0-9]{1}" id="text" name="roomcode_b">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" min="0" max="9" maxlength="1" pattern="[0-9]{1}" id="text" name="roomcode_c">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" min="0" max="9" maxlength="1" pattern="[0-9]{1}" id="text" name="roomcode_d">
                                        </div>
                                        <div class="col-3">
                                            <input type="submit" class="btn btn-danger text-white" value="OK" style="font-weight: 900;" role="button" formaction="/secretsanta/scripts/join_action.php">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col p-2 text-left h-100 text-center">
                <form action="post">
                    <button class="btn btn-choose btn-outline-light h-100 glow " style="padding: 10% 50px; font-size: 40px; font-weight:900;" type="submit" role="button" formaction="/secretsanta/scripts/host_action.php">Host
                        <br>
                        <div style="font-size: 11px;">Looking to host a party? 👀 </div>
                    </button>
                </form>
            </div>
            <div class="col p-2 fillin-div"></div>
        </div>
    </div>
</body>

</html>