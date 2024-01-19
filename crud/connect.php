<?php

$con = new mysqli('localhost', 'root', 'admin', 'case_swap');


if (!$con) {
    die(mysqli_error($con));
}
