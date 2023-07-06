<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
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
    </style>
</head>

<body style="background-color: rgb(255, 100, 100);">
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger" style="height: 7vh">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">secretsanta🤫</a>
            <input class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation" />
            <span class="navbar-toggler-icon"></span>
            <div class="collapse navbar-collapse" id="navbarID">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/secretsanta/welcome.php">Home</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid" style="height: 93vh;">
        <nav aria-label="breadcrumb" class="d-flex justify-content-center" style="background-color: transparent;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item " style="color: #505050;">OPEN STATE</li>
                <li class="breadcrumb-item active" style="color: white;">LOCKED-IN STATE </li>
                <li class="breadcrumb-item" style="color: #505050;">REVELATION STATE</li>
            </ol>
        </nav>

        <h4 class="text-center text-light" style="font-weight:900;">Room Code: 5431</h4>
        <h5 class="text-center text-light" style="font-weight:900;">Hostname: Kobe</h5>

        <div class="d-grid gap-2 text-center">
            <button type="button" name="" id="" class="btn btn-danger button-glow mr-1">Delete Room</button>
            <button type="button" name="" id="" class="btn btn-light button-glow ml-1" style="color:red;">Next State</button>
        </div>

        <div class="text-center mt-3">
            <h1 class="text-light" style="font-weight:900;">You are the santa of:</h1>
            <h2 class="text-light" style="font-weight:900;">Malik 😱</h2>
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
                                    <th scope="col">Wishlist 🎉</th>
                                    <th scope="col"></th>
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
    </div>
</body>

</html>