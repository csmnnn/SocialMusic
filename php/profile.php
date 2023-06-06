<?php
require('requireLogin.php');
if (isset($_SESSION["id"])) {
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/modal.css">
    <script src="../js/script.js" defer></script>
    <script src="../js/fetchUser.js" defer></script>
    <script src="../js/fetchFavArtists.js" defer></script>
    <script src="../js/displayPlaylist.js" defer></script>
    <title>Profile | SocialMusic</title>
</head>

<body>

    <div class="modal-container" id="modalContainer">
        <div class="modal">
            <h1>Choose your favourite artists for this month (max. 3)</h1>
            <div id="div-checkboxes" class="checkboxes">
            </div>
            <button id="close-modal">Confirm</button>
        </div>
    </div>

    <div class="flexbox-homepage-container">
        <?php include '../html/homepage-item-1.html'; ?>

        <div class="flexbox-homepage-item-2">
            <?php include '../html/music-player.html'; ?>
            <div class="profile">
                <div class="profile-banner">
                    <img class="banner-photo" src="../resources/img/banner.jpg" alt="">
                </div>
                <div class="profile-image">
                    <img id="profile-img" class="profile-photo" src="">
                </div>
                <div class="profile-details">
                    <div class="details">
                        <?php if (isset($user)) ?>
                        <p class="details-p">
                            <?= htmlspecialchars("{$user["first_name"]} {$user["last_name"]}") ?>
                        </p>
                        <p class="details-p" style="margin-bottom: 20px;">
                            <?= htmlspecialchars("@{$user["username"]}") ?>
                        </p>
                    </div>
                    <div class="profile-settings">
                        <button class="btn-edit profile-settings-button" title="Profile settings" id="btnEditProfile">
                            <img src="../resources/img/more.png" alt="Profile settings menu">
                        </button>
                    </div>
                </div>
                <hr>
                <div class="profile-favourites">
                    <h1 class="heading">Your favourites</h1>
                    <div class="favourites-section">
                        <div class="favourite-artists">
                            <div class="div-heading">
                                <h1 class="heading-favourites">ARTISTS</h1>
                                <div class="div-btn">
                                    <button id="btnEditArtists" class="btn-edit" title="Edit your favourite artists">
                                        <img src="../resources/img/pencil.png" alt="Edit button">
                                    </button>
                                </div>
                            </div>
                            <div class="favourite-artists-list">
                                <ol class="favourites-ol">
                                </ol>
                            </div>
                        </div>
                        <div class="favourite-songs">
                            <div class="div-heading">
                                <h1 class="heading-favourites">SONGS</h1>
                                <div class="div-btn">
                                    <button id="btnEditSongs" class="btn-edit" title="Edit your favourite songs">
                                        <img src="../resources/img/pencil.png" alt="Edit button">
                                    </button>
                                </div>
                            </div>
                            <div class="favourite-songs-list">
                                <ol class="favourites-ol">
                                </ol>
                            </div>
                        </div>
                        <div class="favourite-albums">
                            <div class="div-heading">
                                <h1 class="heading-favourites">ALBUMS</h1>
                                <div class="div-btn">
                                    <button id="btnEditAlbums" class="btn-edit" title="Edit your favourite albums">
                                        <img src="../resources/img/pencil.png" alt="Edit button">
                                    </button>
                                </div>
                            </div>
                            <div class="favourite-albums-list">
                                <ol class="favourites-ol">
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include '../html/homepage-item-3.html'; ?>
    </div>
</body>

</html>