<?php
include "scripts\session_control.inc";
if (!(isset($_SESSION["room_state"]) && $_SESSION["room_state"] == 1)) {
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
            max-height: 280px;
            overflow-y: auto;
            position: relative;
        }

        .table-wrapper-scroll-y table {
            flex: 1;
            margin-bottom: 0;
        }

        .add-item {
            background-color: transparent;
            border-radius: 0;
            border: 1px solid #ce2423;
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

        /*feat: <button> → <a> for working href */
        .breadcrumb-item+.breadcrumb-item::before {
            font-family: 'FontAwesome';
            content: "\f054" !important;
            color: #c6c6c6;
        }

        .glow {
            box-shadow: 0 0 20px #484747;
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
                    <li class="breadcrumb-item active" style="color: white;">OPEN STATE </li>
                    <li class="breadcrumb-item " style="color: #505050;">LOCKED-IN STATE </li>
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
        <?php
        if ($_SESSION["user_id"] == $_SESSION["host_id"]) {
            echo '
            <div class="d-flex justify-content-center">
                <div>
                    <button id="endRoom" type="button" name="endRoom" class="btn btn-danger button-glow mr-1" role="button">End Room</button>
                    <button id="nextButton" type="button" class="btn btn-light  button-glow ml-1" style="color:red;" role="button">Next State</button>
                </div>
                <div style="position: relative;">
                    <div class="d-flex h-100 align-items-center" style="position: absolute; left: 10px;">
                        <div class="hover-text" style="position: relative; left: 1px; ">
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                            <span class="tooltip-text" id="right">Pairs are AUTOMATICALLY made when state is changed.</span>
                        </div>
                    </div>
                </div>
            </div>
            ';
        }
        ?>
        <div class="d-flex flex-row justify-content-center m-auto my-5 " style="width: 100%;">
            <div class="glow " style="width: 30vw; height: 380px; background-color: white; margin:auto; padding-top:1%; padding-bottom: 1%;">
                <div class="table-wrapper-scroll-y" style="background-color: white; margin: 2% 7% 0% 7%;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th id="selectItem" scope="col">Wishlist 🎉</th>
                            </tr>
                        </thead>
                        <tbody id="wishlistData">
                            <tr><td>&nbsp</td><td hidden></td></tr>
                            <tr><td>&nbsp</td><td hidden></td></tr>
                            <tr><td>&nbsp</td><td hidden></td></tr>
                            <tr><td>&nbsp</td><td hidden></td></tr>
                            <tr><td>&nbsp</td><td hidden></td></tr>
                        </tbody>
                    </table>
                </div>
                <div id="this_div" class="d-flex justify-content-center mt-3" style="width: 100%;">
                    <div class="d-flex">
                        <div class="d-flex align-items-center">
                            <input id="inputWish" type="text" class="add-item form-control" placeholder="Item (e.g. Hotdog)" id="item" name="item">
                            <button id="add" class="btn btn-sm btn-danger text-light ml-2" style="font-weight: 900; font-size: 0.7em;">
                                <i id="add_item" class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                            <button id="delete" class="btn btn-sm btn-danger text-light ml-2" style="font-weight: 900; font-size: 0.7em;">
                                <i id="delete_item" class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="glow" style="width: 30vw; height: 380px; background-color: white; margin:auto; padding-top:1%; padding-bottom: 3%;">
                <div class="table-wrapper-scroll-y" style="background-color: white; margin-right: 20%; margin-left: 20%; margin-top: 5%; ">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Members List 👀</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div class="table-wrapper">
                                <?php
                                include ".\scripts\get_members.php";
                                while ($member = $members->fetchArray(SQLITE3_ASSOC)) {
                                    echo "<tr><td>" . $member['name'] . "</td></tr>";
                                }
                                $db->close();
                                ?>
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var touched_rows = [];


    // var delete_room = document.getElementById("delete_room");
    // var next_state = document.getElementById("next_state");
    // var delete_item = document.getElementById("delete");

    // delete_room.addEventListener("click", function(event) {
    //     if (!confirm("Are you sure you to END the ROOM?")) {
    //         event.preventDefault();
    //     }
    // });

    // next_state.addEventListener("click", function(event) {
    //     if (!confirm("Have Y'ALL decided your wishes? If so, please do continue.")) {
    //         event.preventDefault();
    //     }
    // });

    // delete_item.addEventListener("click", function(event) {
    //     if (!confirm("Are you sure to REMOVE the items from your wishlist/s?")) {
    //         event.preventDefault();
    //     }
    // });

    $(document).ready(function() {
        function loadWishes() {
            $.ajax({
                url: "./scripts/get_wishlist.php",
                type: "POST",
                data: {
                    load: "load"
                },
                success: function(response) {
                    $("#wishlistData").html(response);
                    $("table:first tr").on("click", function () {
                        var wish = $(this).text().split(':');
                        if (!(wish[0] === "Loading data...") && !(wish[0].trim() === "") && !(wish[0].trim() === "Wishlist 🎉")) {
                            if (!touched_rows.includes(wish[1])) {
                                touched_rows.push(wish[1]);
                                $(this).css("background-color", "#6d757d");
                                $(this).css("color", "white");
                            } else {
                                $(this).css("background-color", "transparent");
                                $(this).css("color", "black");
                                var index = touched_rows.indexOf(wish[1]);
                                touched_rows.splice(index, 1);
                            }
                        }
                    });
                }
            });
        }
        
        loadWishes();

        $("#add").click(function() {
            var inputWish = $("#inputWish").val();
            $.ajax({
                url: "./scripts/get_wishlist.php",
                type: "POST",
                data: {inputWish: inputWish},
                success: function(response) {
                    touched_rows = [];
                    $("#inputWish").val('');
                    $("#wishlistData").html(response);
                    location.reload(true);
                }
            });
        });

        $("#delete").click(function() {
            $.ajax({
                url: "./scripts/get_wishlist.php",
                type: "POST",
                data: {deleteWishes: touched_rows},
                success: function(response) {
                    touched_rows = [];
                    $("#wishlistData").html(response);
                    location.reload(true);
                }
            });
        });

        
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
                url: "./scripts/join_draw_action.php",
                type: "POST",
                success: function(response) {
                    console.log(response);
                    if (response > 0) {      
                        location.reload(true);
                    } else {
                        window.location.href = "/secretsanta/scripts/session_join_control.php";
                    }
                }
            });
        });

    });
</script>

</html>