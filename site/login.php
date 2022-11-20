	<section id="form">
		<!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">
						<!--login form-->
						<h2>Login to your account</h2>
						<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?page=login_action">
							<input type="email" placeholder="Email Address" name="email" />
							<input type="password" placeholder="Password" name="password" />
							<span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
						<?php
						if (isset($_SESSION['message_login'])) {
							echo $_SESSION['message_login'];
						}
						unset($_SESSION['message_login']);
						?>
					</div>
					<!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form">
						<!--sign up form-->
						<h2>New User Signup!</h2>
						<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?page=login">
							<input type="text" placeholder="Name" name="name" />
							<input type="email" placeholder="Email Address" name="email" />
							<input type="password" placeholder="Password" name="password" />
							<button type="submit" name="submit" class="btn btn-default">Signup</button>
						</form>
						<?php
						if (isset($_SESSION['message_register'])) {
							echo $_SESSION['message_register'];
						}
						unset($_SESSION['message_register']);
						?>
					</div>
					<!--/sign up form-->
				</div>
			</div>
		</div>
	</section>
	<!--/form-->