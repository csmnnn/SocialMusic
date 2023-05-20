<?php
if (empty($_POST["firstName"])) {
    die("First name is required!");
} 
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password is too short!");
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one small letter");
}

if (!preg_match("/[A-Z]/i", $_POST["password"])) {
    die("Password must contain at least one capital letter");
}

if (!preg_match("/[0-9]/i", $_POST["password"])) {
    die("Password must contain at least one number");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (first_name, last_name, username, email, password)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: ". $mysqli->error);
}

$stmt->bind_param(
    "sssss", 
    $_POST["firstName"],
    $_POST["lastName"],
    $_POST["username"],
    $_POST["email"],
    $password_hash
);

if ($stmt->execute()) {
    session_start();
    header("Location: ../php/index.php");
} else {
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        echo "{$mysqli->error} " . " " . "{$mysqli->errno}";
    }
}

?>