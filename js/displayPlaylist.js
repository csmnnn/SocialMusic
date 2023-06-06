var playlists = [];

fetch('../php/fetchPlaylist.php')
    .then((response) => response.json())
    .then((data) => {
        playlists = data;

        let ul = document.getElementById('ul-playlist');

        playlists.forEach(playlist => {
            let li = document.createElement('li');
            let divImage = document.createElement('div');
            let divName = document.createElement('div');
            let image = document.createElement('img');
            let name = document.createElement('p');

            image.src = playlist[1];
            image.alt = playlist[0];

            divImage.appendChild(image);
            divImage.classList.add('user-playlist-image');

            name.innerHTML = playlist[0];
            name.classList.add('user-playlist-name');

            divName.appendChild(name);
            divName.classList.add('user-playlist-details');
            divName.classList.add('flex');
            divName.classList.add('align-center');
            divName.classList.add('justify-center');

            li.appendChild(divImage);
            li.appendChild(divName);
            li.classList.add('queue-list-item')

            ul.appendChild(li);
        })
    })
    .catch((error) => console.log(error));
