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
  <title>Lista Case | Case Swap</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include 'includes/header.php'; ?>
  <div>
  <h1> &nbsp</h1>
  </div>

  <div class="wrapper3">
    
    <h1>Rezultatele cautarii</h1>
    <hr>
    <?php
    require_once('config/dbconnect.php');
    $query = $_POST["q"];
    $search_type = $_POST["search_type"];
    if ($search_type == 'oras'){
    $search_type = "oras LIKE '%{$query}%' OR tara";

    
} 
    $sql = "
    SELECT id_case, title, CONCAT(oras,' ',tara) AS locatie, suprafata, camere, caut_oras from alte_case
    WHERE $search_type LIKE '%{$query}%'" ;
    if(!$result = $con->query($sql)){
    die('S-a intamplat o eroare in timpul interogarii [' . $con->error .']');
    }
    if($result->num_rows > 0) {
      echo "<table>
          <th>Book ID</th>
          <th>Tip</th>
          <th>Locatie</th>
          <th>Suprafata</th>
          <th>Camere</th>
          <th>Caut oras</th>
          <th></th>
        </tr>";
    while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>" . $row['id_case'] . "</td>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['locatie'] . "</td>";
    echo "<td>" . $row['suprafata'] . "</td>";
    echo "<td>" . $row['camere'] . "</td>";
    echo "<td>" . $row['caut_oras'] . "</td>";
    echo "<td>" . '<form action="search2.php" method="post"> <button type="submit" name="button" value=' . $row["id_case"] . ' class="rentbutton">Inchiriaza</button> </form>' . "</td>";
    echo "</tr>";
    echo "</tr>";
    }
    echo  "</table>";
    }
    else {
      echo "Nu avem nici-o casa in acest moment!";
    }
    $result->free();
    $con->close();
    ?>


  
    



  </div>
  
</body>
</html>
