<?php
include_once 'config/session.php';
if ($_SESSION['user'] == NULL) {
  header('Location: loginpage.php');
}

if (isset($_POST["button"]))
{
   $_SESSION['caseid'] = $_POST["button"];
   header('Location: rent.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Lista caselor | Case Swap</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
  <?php include 'includes/header.php'; ?>

  <div>
  <h1> &nbsp</h1>
  </div>
  
  <div class="wrapper3">
    <h1>Lista Caselor Propuse Spre Inchiriere</h1>
    <hr>
    <table>
      <tr>
        <th>Casa ID</th>
        <th>Tip</th>
        <th>Locatie</th>
        <th>&nbspSuprafata </th> 
        <th>Camere </th>
        <th>Caut oras</th>
        <th></th>
      </tr>
      <?php
      require("config/dbconnect.php");
      $sql = "
      SELECT id_case, title, suprafata, camere, CONCAT(oras,' ',tara) AS locatie, caut_oras from alte_case";

      if(!$result = $con->query($sql)){
      die('S-a intamplat o eroare in timpul interogarii [' . $con->error .']');
      }

      while($row = $result->fetch_assoc()){
      echo "<tr>";
      echo "<td>" . $row['id_case'] . "</td>";
      echo "<td>" . $row['title'] . "</td>";
      echo "<td>" . $row['locatie'] . "</td>";
      echo "<td>" . $row['suprafata'] .  "</td>";
      echo "<td>" . $row['camere'] . "</td>";
      echo "<td>" . $row['caut_oras'] . "</td>";
      echo "<td>" . '<form action=' . htmlspecialchars($_SERVER["PHP_SELF"]) . ' method="post"> <button type="submit" name="button" value=' . $row["id_case"] . ' class="rentbutton">INCHIRIAZA</button> </form>' . "</td>";
      echo "</tr>";
      }
   
      
      ?>
    
      
    </table>

    <h1>Casele Dumneavoastra:</h1>
    <hr>
    <table>
      <tr>
        <th>Casa ID</th>
        <th>Tip</th>
        <th>Locatie</th>
        <th>Suprafata</th>
        <th>Camere</th>
        <th></th>
      </tr>
    <?php
    require("config/dbconnect.php");
    
    $sql2 = "
    SELECT id, tip, locatie, suprafata, camere from casute";

    if(!$result = $con->query($sql2)){
    die('S-a intamplat o eroare in timpul interogarii [' . $con->error .']');
    }
    while($row = $result->fetch_assoc()){
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['tip'] . "</td>";
      echo "<td>" . $row['locatie'] . "</td>";
      echo "<td>" . $row['suprafata'] . "</td>";
      echo "<td>" . $row['camere'] . "</td>";
      echo "</tr>";
      }


    $result->free();
    $con->close();


    
    ?>
  </table>
  </div>
  

  
</body>

</html>
