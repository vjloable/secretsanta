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
<<<<<<< HEAD
    <style>
        .table-wrapper-scroll-y {
            max-height: 400px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
=======
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <style>
        .table-wrapper-scroll-y {
            max-height: 280px;
            overflow-y: auto;
>>>>>>> main
            position: relative;
        }

        .table-wrapper-scroll-y table {
            flex: 1;
            margin-bottom: 0;
        }

<<<<<<< HEAD
        .additem {
            border-bottom: 2px solid white;
            border-left: none;
            border-right: none;
            border-top: none;
=======
        .add-item {
            background-color: transparent;
            border-radius: 0;
            border: 1px solid #ce2423;
            /* border-left: none;
            border-right: none;
            border-top: none; */
>>>>>>> main
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
<<<<<<< HEAD
    </style>
</head>

<body>
=======

        .glow {
            box-shadow: 0 0 20px #484747;
            border-radius: 2%;
        }

        .button-glow {
            box-shadow: 0 0 5px #484747;
            border-radius: 5%;
        }
    </style>
</head>

<body style="background-color: rgb(255, 100, 100);">
>>>>>>> main
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

            <!-- <i class=" fa-solid fa-bars" style="color: white;" aria-hidden="true"></i> -->
        </div>
    </nav>
<<<<<<< HEAD
    <div style="height: 93vh; background-color: rgb(255, 100, 100);">
        <div class="container-fluid" style="height: 60%;">
            <nav aria-label="breadcrumb" class="d-flex justify-content-center" style="background-color: transparent;">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" style="color: white;">OPEN STATE </li>
                    <li class="breadcrumb-item " style="color: #505050;">LOCKED-IN STATE </li>
                    <li class="breadcrumb-item" style="color: #505050;">REVELATION STATE</li>
                </ol>
            </nav>

            <h4 class="text-center text-light" style="font-weight:900;">Room Code: 5431</h4>
            <h5 class="text-center text-light" style="font-weight:900;">Hostname: Kobe</h5>
            <div class="row " style="width: 100%; ">
                <div class="col mb-5">
                    <div class="container" style="width: 100%; height: 100%;">
                        <div style="width: 100%;">
                            <div class="table-wrapper-scroll-y h-100" style="background-color: white; margin-right: 20%; margin-left: 20%;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Wishlist 🎉</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Basketball</td>
                                        </tr>
                                        <tr>
                                            <td>NBA 2K23</td>
                                        </tr>
                                        <tr>
                                            <td>Overwatch 2 Batle Pass</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="this_div" class="d-flex justify-content-center mt-3" style="width: 100%;">
                                <form class="d-flex" onsubmit="addRow(event)">
                                    <div class="d-flex">
                                        <label for="item" style="font-weight:900; color: white; font-size: 24px;">Item: </label>
                                        <input type="text" class="additem" id="item" name="item" style="background-color: rgb(255, 100, 100);" required>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-outline-light ml-2" style="width: 40%; font-weight: 900; font-size: 15px;" formaction="">ADD</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="container" style="width: 100%; ">
                        <div class="table-wrapper-scroll-y" style="background-color: white; margin-right: 20%; margin-left: 20%;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Members List 👀</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <div class="table-wrapper">
                                        <tr>
                                            <td>Vince</td>
                                        </tr>
                                        <tr>
                                            <td>Elizer</td>
                                        </tr>
                                        <tr>
                                            <td>Malik</td>
                                        </tr>
                                        <tr>
                                            <td>Kobe</td>
                                        </tr>

                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
=======
    <div class="container-fluid" style="height: 93vh; ">
        <nav aria-label="breadcrumb" class="d-flex justify-content-center" style="background-color: transparent;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" style="color: white;">OPEN STATE </li>
                <li class="breadcrumb-item " style="color: #505050;">LOCKED-IN STATE </li>
                <li class="breadcrumb-item" style="color: #505050;">REVELATION STATE</li>
            </ol>
        </nav>

        <h4 class="text-center text-light" style="font-weight:900;">Room Code: 5431</h4>
        <h5 class="text-center text-light" style="font-weight:900;">Hostname: Kobe</h5>

        <div class="d-grid gap-2 text-center">
            <button type="button" name="" id="" class="btn btn-danger button-glow mr-1">Delete Room</button>
            <button type="button" name="" id="" class="btn btn-light button-glow ml-1" style="color:red;">Next State</button>
        </div>
        <div class="d-flex flex-row justify-content-center m-auto my-5" style="width: 100%;">
            <div class="glow" style="width: 30vw; height: 380px; background-color: white; margin:auto; padding-top:1%; padding-bottom: 1%;">
                <div class="table-wrapper-scroll-y" style="background-color: white; margin: 2% 7% 0% 7%;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <!-- id="add" is trivial -->
                                <th id="add" scope="col">Wishlist 🎉</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Basketball</td>
                            </tr>
                            <tr>
                                <td>NBA 2K23</td>
                            </tr>
                            <tr>
                                <td>Overwatch 2 Batle Pass</td>
                            </tr>
                            <tr>
                                <td>Overwatch 2 Batle Pass</td>
                            </tr>
                            <tr>
                                <td>Overwatch 2 Batle Pass</td>
                            </tr>
                            <tr>
                                <td>Overwatch 2 Batle Pass</td>
                            </tr>
                            <tr>
                                <td>Overwatch 2 Batle Pass</td>
                            </tr>
                            <tr>
                                <td>Overwatch 2 Batle Pass</td>
                            </tr>
                            <tr>
                                <td>Overwatch 2 Batle Pass</td>
                            </tr>
                            <tr>
                                <td>Overwatch 2 Batle Pass</td>
                            </tr>
                            <tr>
                                <td>Overwatch 2 Batle Pass</td>
                            </tr>
                            <tr>
                                <td>Overwatch 2 Batle Pass</td>
                            </tr>
                            <tr>
                                <td>Overwatch 2 Batle Pass</td>
                            </tr>
                            <tr>
                                <td>Overwatch 2 Batle Pass</td>
                            </tr>
                            <tr>
                                <td>Overwatch 2 Batle Pass</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="this_div" class="d-flex justify-content-center mt-3" style="width: 100%;">
                    <form class="d-flex" onsubmit="addRow(event)">
                        <div class="d-flex align-items-center">
                            <input type="text" class="add-item form-control" placeholder="Item (e.g. Hotdog)" id="item" name="item" required>
                            <button type="submit" class="btn btn-sm btn-danger text-light ml-2" style="font-weight: 900; font-size: 0.7em;" formaction="">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                            <button type="submit" class="btn btn-sm btn-danger text-light ml-2" style="font-weight: 900; font-size: 0.7em;" formaction="">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
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
                                <tr>
                                    <td>Vince</td>
                                </tr>
                                <tr>
                                    <td>Elizer</td>
                                </tr>
                                <tr>
                                    <td>Malik</td>
                                </tr>
                                <tr>
                                    <td>Kobe</td>
                                </tr>
                                <tr>
                                    <td>Kobe</td>
                                </tr>
                                <tr>
                                    <td>Kobe</td>
                                </tr>
                                <tr>
                                    <td>Kobe</td>
                                </tr>
                                <tr>
                                    <td>Kobe</td>
                                </tr>

                            </div>
                        </tbody>
                    </table>
>>>>>>> main
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======
    </div>
    </div>
>>>>>>> main
</body>
<script>
    function addRow(event) {
        console.log("clicked")
    }
</script>

</html>