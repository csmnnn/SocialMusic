<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user WHERE email = '%s'", $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
    $passwordIncorect = array("errorMessage" => "Password incorrect");
    $invalidEmail = array("errorMessage" => "Could not find an user with specified email");

    if ($user) {
        if (password_verify($_POST["password"], $user["password"])) {
            session_start();

            session_regenerate_id();
            $_SESSION = $user;
            header('Location: index.php');
            exit;
        } else {
            exit($passwordIncorect["errorMessage"]);
        }
    } else {
        exit($invalidEmail["errorMessage"]);
    }
}
