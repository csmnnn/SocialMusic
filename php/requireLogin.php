<?php
session_start();
if ($_SESSION == null) {
    header("Location: ../html/login.html");
    die();
}

