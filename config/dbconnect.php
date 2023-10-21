<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "case_swap";
$con = new mysqli($servername,$username, $password, $dbname);
if ($con->connect_error) {
 die ("Eroare de conectare la MySQL: " . $con->connect_error);
}
?>
