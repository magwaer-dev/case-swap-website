<?php
echo '<div class="forms column">
  <h2>Logare</h2>
  <hr>
<form name="loginForm" class="loginForm" action= ' . htmlspecialchars($_SERVER["PHP_SELF"]) . ' method="post" onsubmit="return validateForm2()">
  <input id="username" type="text" name="username" value="" placeholder="Introduceti numele de utilizator">
  <br>
  <input id="password" type="password" name="password" value="" placeholder="Parola">
  <br>';
  ?>
  <?php if (isset($error)): ?>
    <span class="error"><?php echo $error; ?></span>
  <?php endif ?>
  <?php
  echo '
  <button id="submit" class="button" type="submit" name="submitLogin">Logare</button>
</form>
  <p>Încă nu ești membru? <a class="register" href="registerpage.php">Înregistrează-te acum!</a></p>
</div>';
 ?>
