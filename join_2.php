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
        .table-wrapper-scroll-y {
            max-height: 300px;
            /* Set the maximum height of the table */
            overflow-y: auto;
            /* Enable vertical scrolling */
        }

        .table-wrapper-scroll-y table {
            margin-bottom: 0;
            /* Remove the default bottom margin of the table */
        }

        .table-wrapper-scroll-y thead th {
            position: sticky;
            top: 0;
            background-color: #fff;
            /* Set the background color for the sticky header */
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
    </style>
</head>

<body>
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

    <div class="container-fluid" style="height: 93vh; background-color: rgb(255, 100, 100);">
        <nav aria-label="breadcrumb" class="d-flex justify-content-center" style="background-color: transparent;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item " style="color: #505050;">OPEN STATE</li>
                <li class="breadcrumb-item active" style="color: white;">LOCKED-IN STATE </li>
                <li class="breadcrumb-item" style="color: #505050;">REVELATION STATE</li>
            </ol>
        </nav>

        <h4 class="text-center text-light" style="font-weight:900;">Room Code: 5431</h4>
        <h5 class="text-center text-light" style="font-weight:900;">Hostname: Kobe</h5>
        <div class="text-center mt-3">
            <h1 class="text-light" style="font-weight:900;">Your Recipient is:</h1>
            <h2 class="text-light" style="font-weight:900;">Malik 😱</h2>
            <br>
        </div>

        <div style="height: 1px;background-color: white; width: 35%; margin: 0 20% 10px 32.5%;"></div>
        <div>
            <div class="container" style="width: 100%;">
                <div class="table-wrapper-scroll-y" style="background-color: white; margin-right: 30%; margin-left: 30%;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Wishlist 🎉</th>
                            </tr>
                        </thead>
                        <tbody>

                            <div class="table-wrapper">
                                <tr>
                                    <td>Gaming Laptop</td>
                                </tr>
                                <tr>
                                    <td>Crocs</td>
                                </tr>
                                <tr>
                                    <td>Absent Leave</td>
                                </tr>

                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>