<!DOCTYPE html>
<html>

<head>
    <title>Lobby🔥</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <style>
        .glow {
            box-shadow: 0 0 20px #484747;
        }
    </style>
</head>

<body style="height: 100%; background-color: rgb(255, 100, 100); color: white; font-weight: 900;">
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger" style="height: 7vh">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-weight: 900;" href="#">🤫SecretSanta</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div style="height:93vh;">
        <h1 class=" text-center pt-3" style="font-weight:900">Welcome,
            <?php
            session_start();
            echo $_SESSION['name'];
            ?>!
        </h1>
        <h5 class="text-center pt-1" style="font-weight:900">Signed in as:
            <?php
            echo $_SESSION['email'];
            ?>
        </h5>
        <br>
        <div class="d-flex" style="height:40%; margin-right: 0px; margin-left: 0px;">
            <div class="col p-2 text-right h-100 " style="margin-right: 2%">
                <button class="btn btn-outline-light h-100 glow " style="padding: 10% 10%; font-size: 40px; font-weight:900;" href="#" role="button">Join
                    <br>
                    <div style="font-size: 11px;">Friends in a room already? </div>
                </button>
            </div>
            <div class="col p-2 text-left h-100 " style="margin-left: 2%">
                <button class="btn btn-outline-light h-100 glow " style="padding: 10% 10%; font-size: 40px; font-weight:900;" href="#" role="button">Host
                    <br>
                    <div style="font-size: 11px;">Looking to host a party? 👀 </div>
                </button>
            </div>
        </div>
    </div>

</body>

</html>