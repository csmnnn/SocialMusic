<?php
require('requireLogin.php');
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/modal.css">
    <script src="../js/script.js" defer></script>
    <script src="../js/fetchSong.js" defer></script>
    <script src="../js/displayDate.js" defer></script>
    <script src="../js/displayPlaylist.js" defer></script>
    <title>Discover | SocialMusic</title>
</head>

<body>

    <div class="modal-container" id="modalContainer">
        <div class="modal">
            <h1>Modal</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima vitae dolore eligendi non accusantium
                voluptatibus sit cumque, natus facilis magnam aperiam animi dicta consectetur debitis sunt aliquam iure
                nisi iusto.</p>
            <button id="close-modal">Close modal</button>
        </div>
    </div>

    <div class="flexbox-homepage-container">
        <?php include '../html/homepage-item-1.html'; ?>

        <div class="flexbox-homepage-item-2">
            <?php include '../html/music-player.html'; ?>
            <div class="homepage-feed">
                <div class="flex align-center">
                    <h1 id="h1-discover" class="heading">Discover Daily | dd.mm.yyyy</h1>
                    <button type="button" class="add-playlist">Add to your playlists</button>
                </div>
                <hr>
                <div class="discover-songs-container">
                </div>
            </div>
        </div>
        
        <?php include '../html/homepage-item-3.html'; ?>
    </div>
</body>

</html>