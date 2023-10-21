<?php
include_once 'config/session.php';
if ($_SESSION['user'] == NULL){
  header('Location: loginpage.php');
}
 ?>
<!DOCTYPE html>
<html >
  <head>
    <title>Lista Case | Case Swap</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include 'includes/header.php'; ?>
    <div class="wrapper2">
      <div class="column">
        <h1>Casa inchiriata cu succes!</h1>
        <p>Poti cauta alte case pe <a class="link" href="catalog.php">pagina</a> Lista Case.</p>
        <p>Toata informatia despre toate casele tale inchiriate sunt valabile pe<a class="link" href="myaccount.php">pagina</a> Contul Meu</p>
      </div>
      <div class="column">
      </div>
    </div>
    
  </body>
</html>
