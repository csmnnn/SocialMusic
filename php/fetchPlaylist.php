<?php
session_start();

$mysqli = require "./database.php";

$sql = sprintf("SELECT name, picture FROM playlist
                WHERE id_user = %d;", $_SESSION["id"]);

$result = mysqli_query($mysqli, $sql);

$songs = mysqli_fetch_all($result);

header("Content-Type: application/json");

exit(json_encode($songs));
