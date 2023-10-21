<?php include 'login.php';
if ($_SESSION['user'] == NULL) {
  header('Location: loginpage.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Inregistrare | Case swap</title>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <div class="wrapper2">
      <div class="intro column">
        <h1>Felicitari!</h1>
        <p>Contul Dumneavoastra a fost activat cu succes!</p>
        <p>Va rugam sa va Logati pentru a incepe sa folositi Case Swap si pentru a calatori in cele mai frumoase locuri!</p>
    </div>
      <?php include 'includes/loginform.php'; ?>
      </div>
      <script src="validate.js"></script>
  </body>
</html>
