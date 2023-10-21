<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>House swap</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">    
</head>
<body>
<header>
    
    <nav class="top-navbar">
  <ul>
    <li><a class = "navlink" href="../logout.php">IESIRE</a></li>
    <li><a class = "navlink" href="../contacte/contact.php">CONTACTE</a></li>
    <li><a class = "navlink" href="../crud/display.php">POSTEAZA ANUNT</a></li>
    <li><a class = "navlink" href="../myaccount.php">CONTUL MEU</a></li>
    <li><a class = "navlink" href="../catalog.php">LISTA CASE</a></li>
    <li><a class = "navlink" href="../index.php">ACASA</a></li>
  </ul>
  </nav>    
    
</div>

<div class="container">
  <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Adauga o casuta</a>
</button>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Locatie</th>
      <th scope="col">Tipul casei</th>
      <th scope="col">Suprafata totala</th>
      <th scope="col">Numarul de camere</th>
    </tr>
  </thead>
  <tbody>



  <?php

$sql="Select * from `casute`";
$result=mysqli_query($con,$sql);
if($result){ 
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $locatie=$row['locatie'];
    $tip=$row['tip'];
    $suprafata=$row['suprafata'];
    $camere=$row['camere'];
    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$locatie.'</td>
    <td>'.$tip.'</td>
    <td>'.$suprafata.'</td>
    <td>'.$camere.'</td>
    <td>
       <button class="btn btn-primary"><a href="update.php?updateid='.$id.' " class="text-light">Actualizare</a></button>
       <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.' " class="text-light">Sterge</a></button>
      </td>
  </tr>';
  }
}

?>
  
    
  </tbody>
</table>
</div>




</header>
</body>
</html>
