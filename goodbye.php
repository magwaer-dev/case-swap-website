<?php
include_once 'login.php';
if ($_SESSION['user'] == NULL) {
  header('Location: loginpage.php');
}
 ?>
<!doctype html>
<html>
<head>
    <title> Pe curand! | Case swap </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="wrapper2">
    <div class="intro column">
    <h1>Deja ai gasit orasul in care vrei sa te muti?</h1>
    <p>Speram sa te vedem cat mai curand</p>
    <p>Multumim ca v-ati folosit de serviciile noastre!</p>
  </div>
    <?php include 'includes/loginform.php'; ?>
  </div>
  <script src="validate.js"></script>
</body>
</html>
