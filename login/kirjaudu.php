

<?php include('../backend/server.php') ?>
<?php 
    include_once('header2.php');
?>


<div class="section-container border-section-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-container-spacer">
				<div class="text-center">
					<div class="header">
						<h2>Login</h2>
					

					<form method="post" action="kirjaudu.php">
						<?php include('../backend/errors.php'); ?>
						<div class="input-group1">
							<p>Username</p>
							<input type="text" name="username" >
						</div>
						<div class="input-group1">
							<br>
							<p>Password</p>
							<input type="password" name="password">
						</div>
						<br>
						<div class="input-group1">
							<button type="submit" class="btn btn-primary" name="login_user">Login</button>
						</div>
						<p>
							Not registered yet? <a href="rekisiteroidy.php">Register</a>
						</p>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>









<?php 
    include_once('footer.php');
?>