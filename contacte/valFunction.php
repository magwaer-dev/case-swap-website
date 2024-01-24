<?php
$db = mysqli_connect('localhost', 'root', '', 'case_swap');




function emailVal($email)
{
  $msg = array("mesage" => "", "status" => 0);

  if (empty($email)) {
    $msg["mesage"] = "Trebuie sa introduceti emailul";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $msg["mesage"] = "Format de email invalid";
  } else {
    $msg["status"] = 1;
  }

  return $msg;
}

// Functii Contact
function nameVal($fname)
{
  $msg = array("mesage" => "", "status" => 0);

  if (empty($fname)) {
    $msg['mesage'] = "Lipseste numele!";
  } else {
    $msg["status"] = 1;
  }

  return $msg;
}

function commentVal($comment)
{
  $msg = array("mesage" => "", "status" => 0);

  if (empty($comment)) {
    $msg["mesage"] = "Campul este gol!";
  } elseif (strlen($comment) < 20) {
    $msg["mesage"] = "Sunt prea putine cuvinte";
  } else {
    $msg["status"] = 1;
  }

  return $msg;
}
