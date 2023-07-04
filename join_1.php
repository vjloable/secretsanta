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
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger">
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

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2 class="text-right">Room Code: 5431</h2>
                <div class="table-wrapper-scroll-y">
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
                <br>
                <a name="" id="" class="btn btn-primary" href="#" role="button">ADD</a>
                <a name="" id="" class="btn btn-primary" href="#" role="button">DELETE</a>
            </div>
            <div class="col">
                <h2>Hostname: Kobe</h2>
                <div class="table-wrapper-scroll-y">
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
                                    <td>UrMom</td>
                                </tr>

                            </div>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- <div class="d-flex mb-3">
                <h2 class="p-2 flex-grow-1 text-right">Room Code: 5431</h2>
                <h2 class="p-2 flex-grow-1 text-left">Hostname: Kobe</h2>
            </div>
            <div class="d-flex mb-3">
                <div class="p-2 flex-grow-1">
                    <div class="d-flex flex-column">
                        <div class="p-2">
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
                        <div class="p-2">
                            <a name="" id="" class="btn btn-primary" href="#" role="button">ADD</a>
                            <a name="" id="" class="btn btn-primary" href="#" role="button">DELETE</a>
                        </div>
                    </div>
                </div>
                <div class="p-2 flex-grow-1">
                    <div class="d-flex flex-column">
                        <div class="p-2">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Members List 👀</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Vince</td>
                                    </tr>
                                    <tr>
                                        <td>Elizer</td>
                                    </tr>
                                    <tr>
                                        <td>Malik</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
</body>

</html>