<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
	<div class="login-page">
	  <div class="form">
	    <form class="register-form" action="signup-check.php" method="post">
		  <?php if (isset($_GET['error'])) { ?>
     	  	<p class="error"><?php echo $_GET['error']; ?></p>
     	  <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

	      <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

		  <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>

	      <input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <input type="password" 
                 name="re_password" 
                 placeholder="Retype New Password"><br>

	      <button type="submit">create</button>

	      <p class="message">Already registered? <a href="#">Sign In</a></p>
	    </form>

	    <form class="login-form" action="login.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p style= " font-family: 'Roboto', sans-serif;
  text-transform: uppercase;
  color: #07484A;" class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 <input type="text" name="uname" placeholder="User Name"><br>
		 <input type="password" name="password" placeholder="Password"><br>
	      <button type="submit">login</button>
	      <p class="message">Not registered? <a href="#">Create an account</a></p>
	    </form>
	  </div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/login.js"></script>
</body>
</html>