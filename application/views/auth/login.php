<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?= base_url('assets/img/logo.png') ?>">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Login</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<!-- My CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>">
</head>
<body>
<div class="had-container">
	<div class="parallax-container logueo">
		<div class="row"><br>
			<div class="col m8 s8 offset-m2 offset-s2 center">
				<h4 class="truncate bg-card-user">
					<img src="<?= base_url('assets/img/FavGold_144.png') ?>" alt=""
						  class="circle responsive-img">
					<div class="row login">
						<h4> Art & Entertainment</h4>
						<form class="col s12">
							<div class="row">
								<div class="input-field col m12 s12">
									<i class="material-icons iconis prefix">account_box</i>
									<input id="icon_prefix" type="text" class="validate">
									<label for="icon_prefix">Username or Email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col m12 s12">
									<i class="material-icons iconis prefix">enhanced_encryption</i>
									<input id="password" type="password" class="validate">
									<label for="password">Password</label>
								</div>
							</div>
							<div class="row">
								<button class="btn waves-effect waves-light right" type="submit" name="action">
									Sign In
								</button>
							</div>
							<div class="row footer">
								<p>User Guide | Terms & Conditions
									<b class="right">&copy;Copyright <?= date("Y") ?>
										<a href="https://gigdynamics.co.ke/">Gig Dynamics </a>
									</b>
								</p>
							</div>
						</form>
					</div>
				</h4>
			</div>
		</div>
	</div>
</div>


<!-- jQuery first, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="<?php echo base_url('assets/js/login.js') ?>"></script>
</body>
</html>
