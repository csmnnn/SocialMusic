<?php
session_start();

$mysqli = require "./database.php";

$sql = sprintf("SELECT * FROM user 
                WHERE id=%d", $_SESSION["id"]);

$result = mysqli_query($mysqli, $sql);

$user = mysqli_fetch_assoc($result);

header("Content-Type: application/json");

exit(json_encode($user));
