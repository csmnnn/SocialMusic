var playlists = [];

fetch('../php/fetchPlaylist.php')
    .then((response) => response.json())
    .then((data) => {
        playlists = data;

        let playlistContainer = document.getElementById('playlists-home');

        playlists.forEach(playlist => {
            let divPlaylistItem = document.createElement('div');
            let divImage = document.createElement('div');
            let divName = document.createElement('div');
            let image = document.createElement('img');
            let name = document.createElement('p');

            image.src = playlist[1];
            image.alt = playlist[0];
            image.classList.add('playlist-image');

            divImage.appendChild(image);
            divImage.classList.add('playlist-image');

            name.innerHTML = playlist[0];
            name.classList.add('playlist-name');

            divName.appendChild(name);
            divName.classList.add('playlist-name');

            divPlaylistItem.appendChild(divImage);
            divPlaylistItem.appendChild(divName);
            divPlaylistItem.classList.add('playlist-item')

            playlistContainer.appendChild(divPlaylistItem);
        })

    })
    .catch((error) => console.log(error));