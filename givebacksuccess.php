<?php
include_once 'config/session.php';
if ($_SESSION['user'] == NULL){
  header('Location: loginpage.php');
}
 ?>
<!DOCTYPE html>
<html >
  <head>
    <title>Lista Case | Case swap</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include 'includes/header.php'; ?>
    <div class="wrapper2">
      <div class="column">
        <h1>Ati anulat cu succes casa inchiriata!</h1>
        <p>Poti cauta si alte case pe <a class="link" href="catalog.php">pagina</a> List Case.</p>
        <p>Toata informatia cu casele pe care le-ai schimbat se afla pe <a class="link" href="myaccount.php">pagina</a> CONTUL MEU</p>
      </div>
      <div class="column">
      </div>
    </div>
    
  </body>
</html>
