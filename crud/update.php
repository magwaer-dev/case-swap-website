<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `casute` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$locatie=$row['locatie'];
$tip=$row['tip'];
$suprafata=$row['suprafata'];
$camere=$row['camere'];

if(isset($_POST['submit'])){
    $suprafata=$_POST['suprafata'];
    $tip=$_POST['tip'];
    $locatie=$_POST['locatie'];
    $camere=$_POST['camere'];

    $sql="update `casute` set id='$id',suprafata='$suprafata',tip='$tip',locatie='$locatie',camere='$camere'
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Date inserate cu succes";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">  

    <title>Crud</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
<div class="form">
<div class="form-group">
    <label>Locatie</label>
    <input type="text" class="form-control"  placeholder="Introduceti locatia" name="locatie" autocomplete="off" value=<?php echo $locatie;?>>
</div>
<div class="form-group">
    <label>Tip casa</label>
    <input type="text" class="form-control"  placeholder="Introduceti tipul casei" name="tip" autocomplete="off" value=<?php echo $tip;?>>
</div>
<div class="form-group">
    <label>Suprafata totala</label>
    <input type="text" class="form-control"  placeholder="Introduceti suprafata totala" name="suprafata" autocomplete="off" value=<?php echo $suprafata;?>> 
</div>
<div class="form-group">
    <label>Camere</label>
    <input type="text" class="form-control"  placeholder="Introduceti numarul de camere" name="camere" autocomplete="off" value=<?php echo $camere;?>>
</div>
  <button type="submit" class="btn btn-primary" name="submit">Actualizare</button>
  <button  class="btn btn-primary" ><a class="text-light" href="display.php">Inapoi</a></button>
</form>
    </div>


</div>
  </body>

  
</html>