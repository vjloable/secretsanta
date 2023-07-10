<?php
include "scripts\session_control.inc";
?>
<!DOCTYPE html>
<html style="height: 100%;">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>Lobby🔥</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5d09c7d46f.js" crossorigin="anonymous"></script>
    <style>
        .table-wrapper-scroll-y {
            max-height: 75%;
            overflow-y: auto;
            position: relative;
        }

        .table-wrapper-scroll-y table {
            flex: 1;
            margin-bottom: 0;
        }

        .table-wrapper-scroll-y thead th {
            position: sticky;
            top: 0;
            background-color: #fff;
            z-index: 1;
        }

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
            width: 253.75px;
            height: 146.7px t;
            padding: 10% 50px;
            font-size: 40px;
            font-weight: 900;
        }

        .btn-divs {
            width: 367.05px;
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

        @media only screen and (max-width: 367.05px) {

            h1 {
                font-size: 28px;
            }

            h5 {
                font-size: 14px;
            }

            form,
            .form-of1 {
                width: 100%;
                height: 100% !important;
                margin: auto;
            }

            .btn-divs {
                width: 80%;
                margin: auto;
            }

            .btn-choose {
                width: 80%;
                height: 146.7px !important;
                padding: 0 !important;
                font-size: 1em;
                margin: auto;
            }
        }

        @media only screen and (max-width: 595px) {
            .navbar-brand {
                position: relative;
                bottom: 5%;
            }

            .row {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .container-small-cm {
                position: relative;
                bottom: 3px;
            }

            .collapse {
                margin-bottom: 150px !important;
            }

            /* .collapse,
            .collapsing {
                margin: auto;
            } */

            .fillin-div {
                display: none;
            }

            .col {
                margin: 0 0 0 0 !important;
            }

            .mb-5 {
                margin-bottom: 40px !important;
            }

            .btn-divs-2 {
                padding-top: 50px;
            }

            .small-div {
                flex-direction: column;
                align-items: center;
            }

            .m-2 {
                margin-top: 5%;
                margin-bottom: 5%;
            }

            .card-body {
                padding: 10px 0 10px 0 !important;
            }

            .form-of1 {
                padding: 0 0 0 0 !important;
            }

            .small-div {
                height: 472.29px;
            }
        }

        @media only screen and (min-width: 595px) {
            .btn-choose {
                width: 253.75px !important;
                height: 146.7px !important;
                padding: 10% 50px;
                font-size: 40px;
                font-weight: 900;
            }

            .collapse {
                margin-top: 10%;
            }

            .small-div {
                height: 40%;
            }
        }

        /*navbar*/
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
        <div class="d-flex small-div" style="margin-right: 0px; margin-left: 0px;">
            <div class="col p-2 fillin-div"></div>
            <div class="col btn-divs m-2 text-right h-100 text-center mb-5" style="padding: 0 0 0 0 !important;">
                <div class="row align-items-center small-height" style="width: 100%;">
                    <form action="post" class="form-of1" style="margin-right: 20px;">
                        <button class="btn btn-choose btn-outline-light h-100 glow text-center " role="button" type="button" data-toggle="collapse" data-target="#enterRoomCode">Join
                            <br>
                            <div style="font-size: 11px;">Friends in a room already? </div>
                        </button>
                    </form>
                    <div class="collapse" id="enterRoomCode" style="width: 253.75px; position: static; top: 5%; margin: auto; padding: 0 0 0 0 !important;">
                        <br>
                        <div class="card bg-transparent border-light" style="width: 100%;">
                            <div class="card-header bg-danger border-transparent" style="font-weight: 900; font-size: 15px;">
                                ENTER 4-DIGIT ROOM CODE
                            </div>
                            <div class="card-body">
                                <form method="post">
                                    <div class="row align-items-center justify-content-around">
                                        <div class="col-2">
                                            <input type="text" class="form-control" min="0" max="9" maxlength="1" pattern="[0-9]{1}" name="roomcode_a" style="width: 40px;">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" min="0" max="9" maxlength="1" pattern="[0-9]{1}" name="roomcode_b" style="width: 40px;">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" min="0" max="9" maxlength="1" pattern="[0-9]{1}" name="roomcode_c" style="width: 40px;">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" min="0" max="9" maxlength="1" pattern="[0-9]{1}" name="roomcode_d" style="width: 40px;">
                                        </div>
                                        <div class="col-3">
                                            <input type="submit" class="btn btn-danger text-white" value="OK" style="font-weight: 900;" role="button" formaction="/secretsanta/scripts/join_action.php">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="glow mb-5 mt-3" style="width: 252.150px; height: 200px; background-color: white; margin:auto; padding-top: 1px;">
                            <div class="table-wrapper-scroll-y" style="background-color: white; margin: 5% 5% 0 5%;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Rooms Joined 💦</th>
                                            <th scope="col">State 🚦</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div class="table-wrapper">
                                            <?php
                                            include ".\scripts\get_join_rooms.php";
                                            // echo $displayRooms;
                                            ?>                                        
                                        </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="m-2 "></div>
            <div class="col btn-divs m-2 btn-divs-2 text-left h-100 text-center" style="padding: 0 0 0 0 !important;">
                <form action="post">
                    <button class="btn btn-choose btn-outline-light h-100 glow " type="submit" role="button" formaction="/secretsanta/scripts/host_action.php">Host
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