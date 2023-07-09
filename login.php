<!DOCTYPE html>
<html style="height: 100%;">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
	<title>Login 📝</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/5d09c7d46f.js" crossorigin="anonymous"></script>
	<style>
		.glow {
			box-shadow: 0 0 20px #484747;
		}

		.navbar {
			height: 7vh;
		}

		@media only screen and (max-width: 575px) {
			.navbar-brand {
				position: relative;
				bottom: 5%;
			}

			.container-small-cm {
				position: relative;
				bottom: 3px;
			}
		}

		@media only screen and (max-height:395px) {
			.navbar {
				height: 40px;
			}
		}
	</style>
</head>

<body style="height: 100%; background-color: rgb(255, 100, 100);">
	<nav class="navbar navbar-expand-sm navbar-dark bg-danger" style="height: 50.5px;">
		<div class="container-fluid container-small-cm">
			<a class="navbar-brand" style="font-weight: 900;" href="#">🤫SecretSanta</a>
		</div>
	</nav>
	<div style="height: 93vh;">
		<a class="btn btn-outline-dark mt-1 ml-1" style="border-color: rgb(255, 100, 100);" href="/secretsanta/welcome.php">
			<i class="fa fa-arrow-left fa-2x p-3" aria-hidden="true" style="color: white; cursor: pointer;"></i>
		</a>
		<div class="container" style="min-height: 70%;display: flex;align-items: center;">
			<div class="card mx-auto glow" style="max-width: 600px; padding: 20px;">
				<div class="row">
					<h2 class="card-title text-center" style="font-weight: 900; color: #484747;">Login Form</h2>
					<div>
						<p class="text-danger text-center text-wrap">
							<?php
							if (isset($_GET['error_msg'])) {
								echo "*" . urldecode($_GET['error_msg']);
							}
							?>
						</p>
						<form method="post">
							<div class="form-group">
								<span class="input-group-addon">
									<i class="fa fa-envelope-o fa-fw pr-2"></i>
								</span>
								<label for="email" style="font-weight: 900; color: #484747;">Email:</label>
								<input type="email" class="form-control" id="email" name="email" required>
							</div>
							<br>
							<button type="submit" class="btn btn-success btn-block" formaction="/secretsanta/scripts/login_action.php">Confirm</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>