<?php include 'register.php'; ?>

<html>
<head>
  <title>Inregistrare | Case Swap</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="wrapper2">
    <div class="column">
    <h1>Înregistrează-te pe Case Swap acum!</h1>
    <p>Franța, Spania, Italia, Germania - călătorește unde dorești! </p>
    <p>Înregistrează-te acum, și primește acces la lista noastră de case de lux. Închiriază una cu doar un singur click!</p>
    <hr><br>
    <p>Deja ai cont? <a class="register" href="loginpage.php">Logheaza-te!</a></p>
    </div>
    <div class="column">
      <h2>Logheaza-te</h2> <hr>
      <form name="loginForm" class="loginForm" action="registerpage.php" method="post" onsubmit="return validateForm()">
        <input type="text" name="username" value="" placeholder="Login" autocomplete="off">
          <?php if (isset($name_error)): ?>
	  	    <br><span class="error"><?php echo $name_error; ?></span>
	        <?php endif ?>
        <input type="password" name="password" value="" placeholder="Parola" autocomplete="off">
          <?php if (isset($password_error)): ?>
	  	    <br><span class="error"><?php echo $password_error; ?></span>
	        <?php endif ?>
        <input id="confirmPassword" type="password" name="confirmPassword" value="" placeholder="Confirmă parola" autocomplete="off">
          <?php if (isset($password_error2)): ?>
	  	    <br><span class="error"><?php echo $password_error2; ?></span>
	        <?php endif ?>
        <input id="email" type="text" name="email" value="" placeholder="Adresa de e-mail" autocomplete="off">
          <?php if (isset($email_error)): ?>
      	  <br><span class="error"><?php echo $email_error; ?></span>
          <?php endif ?>
        <button type="submit" name="button" class="button">Inregistreaza-te acum</button>
      </form>
    </div>
  </div>
  <script src="validate.js"></script>

</body>
</html>
