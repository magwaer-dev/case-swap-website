<?php
require_once('config/dbconnect.php');
$username = "";
$email = "";
$flag = TRUE;

if(isset($_POST['button'])){
$username = $_POST["username"];
$password1 = $_POST["password"];
$password2 = $_POST["confirmPassword"];
$hashedpassword = password_hash($_POST["password"], PASSWORD_DEFAULT);
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (!ctype_alnum($username)) {
  $name_error = "Doar litere si cifre sunt permise";
  $flag = FALSE;
}else
if( empty($username) || (strlen($username) < 4))
{
  $name_error = "Numele de utilizator trebuie sa contina min. 4 caractere";
  $flag = FALSE;
} else if (empty($password1) || strlen($password1) < 8 ){
  $password_error = "Parola trebuie sa aiba min. 8 caractere";
  $flag = FALSE;
} else if ($password1 != $password2){
  $password_error2 = "Parolele nu se aseamana!";
  $flag = FALSE;
} else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $email_error = "Adresa de email invalida";
    $flag = FALSE;
} else {
$sql_u = "SELECT * FROM users WHERE username='$username'";
$sql_e = "SELECT * FROM users WHERE email='$email'";
$res_u = $con->query($sql_u);
$res_e = $con->query($sql_e);

if ($res_u->num_rows > 0) {
  	  $name_error = "Ne pare rau, numele de utilizator deja exista";
  	}else if( $res_e->num_rows > 0){
  	  $email_error = "Ne pare rau, emailul deja exista";
  	}else if( $flag === TRUE){

      if ($stmt = $con -> prepare("INSERT INTO users (username, password, email) values (
        ?, ?, ?)")) {
      $stmt -> bind_param('sss', $username, $hashedpassword, $email);
    if ($stmt -> execute()){
      header('Location: congrats.php');
    } else {
      echo "Eroare: " . $insertQuery . "<br>" . $con->error;
    }

    /*  $insertQuery = "INSERT INTO users (username, password, email) values (
        '$username', '$hashedpassword', '$email')";*/

    /*  if($con->query($insertQuery) === TRUE){
      header('Location: congrats.php');
      }
      else {
        echo "Error: " . $insertQuery . "<br>" . $con->error;
      }*/
}
}
}
}
$con->close();
?>
