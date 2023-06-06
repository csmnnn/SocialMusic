<?php
$mysqli = require __DIR__ . "/database.php";
$sql = "SELECT * FROM user";

$result = mysqli_query($mysqli, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

header("Content-Type: application/json");

exit(json_encode($users));
