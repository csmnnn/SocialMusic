<?php
session_start();

$mysqli = require "./database.php";

$sql = "SELECT song_name, song_artist, song_img, song_url, song_length FROM song;";

$result = mysqli_query($mysqli, $sql);

$songs = mysqli_fetch_all($result);

header("Content-Type: application/json");

exit(json_encode($songs));
