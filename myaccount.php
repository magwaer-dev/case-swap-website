<?php
include_once 'config/session.php';
require_once('config/dbconnect.php');
if ($_SESSION['user'] == NULL) {
  header('Location: loginpage.php');
}
if (isset($_POST["button"]))
{
   $_SESSION['transactionid'] = $_POST["button"];
   header('Location: giveback.php');
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Contul meu| Case Swap</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include 'includes/header.php'; ?>

    <div>
  <h1> &nbsp</h1>
  </div>

    <div class="wrapper3">
      <h1>Contul meu</h1>
      <hr>
      <h2>Casele inchiriate:</h2>
      <?php
     $userid = $_SESSION['userid'];
     $sql = "
     SELECT transactions.ID_transaction, alte_case.id_case, alte_case.title,
     CONCAT(alte_case.oras,' ',alte_case.tara) AS locatie, alte_case.suprafata, alte_case.camere,
     transactions.Date_start FROM transactions NATURAL JOIN alte_case
     WHERE transactions.Date_end IS NULL AND transactions.ID_User = '$userid' ";
     if(!$result = $con->query($sql)){
     die('There was an error running the query [' . $con->error .']');
   }
   if($result->num_rows > 0) {
     echo "<table>
         <th>ID casa</th>
         <th>Titlu</th>
         <th>Locatie</th>
         <th> &nbsp m<sup> 2 &nbsp </th>
         <th>&nbsp Camere &nbsp</th>
         <th>Data schimbului</th>
       </tr>";
   while($row = $result->fetch_assoc()){
   echo "<tr>";
   echo "<td>" . $row['id_case'] . "</td>";
   echo "<td>" . $row['title'] . "</td>";
   echo "<td>" . $row['locatie'] . "</td>";
   echo "<td>" . $row['suprafata'] . "</td>";
   echo "<td>" . $row['camere'] . "</td>";
   echo "<td>" . $row['Date_start'] . "</td>";
   echo "<td>" . '<form action=' . htmlspecialchars($_SERVER["PHP_SELF"]) . ' method="post"> <button type="submit" name="button" value=' . $row["ID_transaction"] . ' class="rentbutton">FINALIZEAZA</button> </form>' . "</td>";
   echo "</tr>";
   }
  echo  "</table>";
   }
   else {
     echo "Nu ati inchiriat nici-o casa la moment!";
   }
     $result->free();
     $con->close();
     ?>
    </div>
    
  </body>
</html>
