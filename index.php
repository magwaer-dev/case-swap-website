<?php
include_once 'config/session.php';
if ($_SESSION['user'] == NULL) {
  header('Location: loginpage.php');
}
 ?>
    <!doctype html>
    <html>
    <head>
    <title>Case Swap | Acasa</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
window.onload = function() {
document.getElementById("searchInput").focus();
};
</script>
    </head>
    <body>
    <?php include 'includes/header.php'; ?>
    
    <div>
  <h1> &nbsp</h1>
  </div>

    <div class="wrapper">
      <div class="logo">
        <a class="navlink" href="index.php" title="Libraria ta Web">Case Swap</a>
      </div>
        <form class="search" action="search2.php" method="post">
          <div>
            <input id="searchInput" type="search" name="q" value="" placeholder="Care tara/oras doresti sa vizitezi astazi?">
            <button id="searchButton" type="submit" style="border: 0; background: transparent">
            <img src="css/search.png" width="25px" height="25px" alt="search"/>
            </button>
          </div>
          <input type="radio" name="search_type" value="oras" checked>Tara/Oras
          <input type="radio" name="search_type" value="title">Denumire
        </form>
    </div>
    
    </body>
    </html>
