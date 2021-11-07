<?php include('../backend/server.php') ?>
<?php 
    include_once('header2.php');
?>



<div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6">
						<h2>Register</h2>					

                        <form method="post" action="rekisiteroidy.php">
                            
                            <div class="input-group1">
                                <p>Username:</p>
                                <input style="width: 80%;" style="width: 80%;" type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
                            </div>
                            <div class="input-group1">
                            <br>
                                <p>Firstname:</p>
                                <input style="width: 80%;" type="text" name="nimi"  placeholder="Name" value="<?php echo $nimi; ?>">
                            </div>
                            <div class="input-group1">
                            <br>

                                <p>Last name:</p>
                                <input style="width: 80%;" type="text" name="sukunimi" placeholder="Last name" value="<?php echo $sukunimi; ?>">
                            </div>
                            <div class="input-group1">
                            <br>

                                <p>Email:</p>
                                <input style="width: 80%;" type="email" name="email"  placeholder="Email" value="<?php echo $email; ?>">
                            </div>
                            <div class="input-group1">
                            <br>

                                <p>Password:</p>
                                <input style="width: 80%;" type="password" name="password_1">
                            </div>
                            <div class="input-group1">
                            <br>

                                <p>Password:</p>
                                <input style="width: 80%;" type="password" name="password_2">
                            </div>
                            <br>
                            <div class="input-group1">
                                <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
                            </div>
                            <p>
                                You are already registered?<a href="kirjaudu.php">Login</a>
                            </p>
                        </form>
                        
        
        


        </div>


      <div class="col-xs-12 col-md-6">
      <?php include('../backend/errors.php'); ?>
      <h2>Keep in mind</h2>
        <p>If you loose your username or password there is no way to get it back</p>
        <div class="col-">
        <br>
        <br>
                <img class="img-responsive" style="left" src="../assets/images/md5.png" alt="">
            </div>



        </div>
    </div>
</div>








<?php 
    include_once('footer.php');
?>