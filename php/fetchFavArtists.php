<?php
session_start();

$mysqli = require __DIR__ . "/database.php";

$sql = sprintf("SELECT artist_id_artist FROM following_artists
                WHERE user_id=%d", $_SESSION["id"]);

$result = mysqli_query($mysqli, $sql);

$artists = mysqli_fetch_all($result);

$fetchedArtists = array();

foreach($artists as $key => $value) {
    foreach($value as $key => $artist_id) {
        $sql2 = sprintf("SELECT artist_name, artist_img FROM artist
                        WHERE id_artist=%d", $artist_id);

        $result2 = mysqli_query($mysqli, $sql2);

        $artist = mysqli_fetch_all($result2);
        
        array_push($fetchedArtists, $artist);
    }
}

header("Content-Type: application/json");

exit(json_encode($fetchedArtists));
