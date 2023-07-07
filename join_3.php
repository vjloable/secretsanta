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

            <!-- <i class=" fa-solid fa-bars" style="color: white;" aria-hidden="true"></i> -->
        </div>
    </nav>

    <div class="container-fluid" style="height: 93vh; ">
        <nav aria-label="breadcrumb" class="d-flex justify-content-center" style="background-color: transparent;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item " style="color: #505050;">OPEN STATE</li>
                <li class="breadcrumb-item" style="color: #505050;">LOCKED-IN STATE</li>
                <li class="breadcrumb-item active" style="color: white;">REVELATION STATE</li>
            </ol>
        </nav>

        <h4 class="text-center text-light" style="font-weight:900;">Room Code: 5431</h4>
        <h5 class="text-center text-light" style="font-weight:900;">Hostname: Kobe</h5>

        <div class="d-grid gap-2 text-center">
            <button type="button" name="" id="" class="btn btn-danger button-glow mr-1">Delete Room</button>
            <button type="button" name="" id="" class="btn btn-light button-glow ml-1" style="color:red;">Next State</button>
        </div>
        <div class="row d-flex align-items-center my-5">
            <div class="col d-flex align-items-center justify-content-end" style="height: 70%;">
                <div class="text-center text-dark border bg-white border-white p-5 glow" style="margin-right: 5%; position: sticky;">
                    <h3 style="font-weight: 900;">You are the <br> santa of:</h3>
                    <h4 style="font-weight: 900;">Malik</h4>
                </div>
            </div>
            <div class="col d-flex align-items-center" style="height: 70%;">
                <div class="text-center text-dark border bg-white border-white p-5 glow" style="margin-left: 5%; position: sticky;">
                    <h3 style="font-weight: 900;">Your Santa <br> is:</h3>
                    <h4 style="font-weight: 900;">Urmom 😱😱</h4>
                </div>
            </div>
        </div>
        <div style="display: flex; justify-content: center;">
            <button type="button" class="btn btn-outline-light" style="border: 0px; text-decoration: underline;">
                Back to Lobby
            </button>
        </div>
    </div>
</body>

</html>