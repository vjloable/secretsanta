<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
	<title>Welcome😎</title>
	<style>
		.jumbotron-heading {
			font-size: 40px;
		}

		.btn-custom-small {
			font-weight: 900;
			width: 30%;
			font-size: 0.8em;
		}

		.small-flex-fill {
			display: none;
			padding: 0 5px 0 5px;
		}

		.navbar {
			height: 7vh;
		}

		@media only screen and ((max-width: 1031px)and (min-width:389px)) {
			.jumbotron-heading {
				font-size: 65px;
			}

			.lead {
				padding: 0 10% 0 10%;
			}

			.btn-custom-small {
				width: 160px;
				font-weight: 900;
			}
		}

		@media only screen and (min-width:1032px) {
			.jumbotron-heading {
				font-size: 90px;
			}

			.btn-custom-small {
				width: 160px;
				font-weight: 900;
			}

			.small-flex-fill {
				display: block;
			}

		}

		@media only screen and (max-height:395px) {
			.navbar {
				height: 40px;
			}
		}

		.glow {
			box-shadow: 0 0 20px #994747;
		}
	</style>
</head>

<body style="background-color: rgb(255, 100, 100);">
	<nav class="navbar navbar-expand-sm navbar-dark bg-danger">
		<div class="container-fluid">
			<a class="navbar-brand" style="font-weight: 900;" href="#">🤫SecretSanta</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>
	<div class="d-flex" style="height: 93vh; background-color: rgb(255, 100, 100);">
		<div class="p-2 flex-fill small-flex-fill"></div>
		<div class="p-2 col-3 flex-fill small-flex-fill-a align-self-center mb-5" style="width: 33%">
			<div class="mb-4">
				<h1 class="jumbotron-heading" style="font-weight: 900; text-align: center; color: rgb(255, 255, 255);">Secret Santa</h1>
				<p class="lead text-center" style="color: rgb(255, 255, 255);">
					A web-based application that facilitates a fair randomization of gift-givers or “santa” in the exchanging of gifts among a group of users.
				</p>
			</div>
			<div class="container-fluid justify-content-center">
				<div class="btn-group-lg btn-group-justified text-center">
					<form action="post">
						<button type="submit" class="btn btn-outline-light btn-custom-small mr-3 py-2" formaction="/secretsanta/login.php">LOGIN</button>
						<button type="submit" class="btn btn-outline-light btn-custom-small py-2 " formaction="/secretsanta/signup.php">SIGN-UP</button>
					</form>
				</div>
			</div>
		</div>
		<div class="p-2 flex-fill small-flex-fill"></div>
	</div>
</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</html>