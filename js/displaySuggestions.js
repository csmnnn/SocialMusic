var songs = [];

fetch('../php/fetchSong.php')
    .then((response) => response.json())
    .then((data) => {
        songs = data;

        let musicPlayer = document.getElementById('music-player');
        let songLength = document.getElementById('song-length');

        let divPlayingSongArtist = document.querySelector('.playing-song-details.song-writers');
        let divPlayingSongName = document.querySelector('.playing-song-details.song-name');

        let suggestionContainer = document.getElementById('div-suggestion');

        for (var i = songs.length - 1; i > 0; i--) {
            var j = Math.floor(Math.random() * (i + 1));
            var temp = songs[i];
            songs[i] = songs[j];
            songs[j] = temp;
        }

        let randomSongs = songs.slice(0, 4);
        randomSongs.forEach(song => {
            let divSong = document.createElement('div');
            let divSongImg = document.createElement('div');
            let songImg = document.createElement('img');
            let anch = document.createElement('a');
            let songName = document.createElement('p');
            let audioElement = document.createElement('audio');

            audioElement.src = song[3];
            audioElement.id = song[0];

            songImg.src = song[2];
            songImg.classList.add('playlist-image');
            divSongImg.appendChild(songImg);
            divSongImg.classList.add('playlist-image');

            anch.href = "artist.php";
            anch.innerHTML = song[1];
            anch.classList.add('song-writers');

            if (song[0].length > 14) {
                songName.innerHTML = song[0].slice(0, 10) + '...';
            } else {
                songName.innerHTML = song[0];
            }
            songName.classList.add('songs');
            songName.classList.add('song-title');

            divSong.appendChild(divSongImg);
            divSong.appendChild(anch);
            divSong.appendChild(songName);
            divSong.classList.add('playlist-item');

            songImg.addEventListener('click', () => {
                console.log('click');
                var img = document.querySelector('#spanPlay img');
                const minutes = Math.floor(song[4] / 60);
                let seconds = song[4] - minutes * 60;
                if (seconds <= 9) {
                    seconds = '0' + seconds;
                }

                divPlayingSongArtist.innerHTML = song[1];
                if (song[0].length > 14)
                    divPlayingSongName.innerHTML = song[0].slice(0, 10) + '...';
                else
                    divPlayingSongName.innerHTML = song[0];

                musicPlayer.src = audioElement.src;
                songLength.innerHTML = minutes + ":" + seconds;
                musicPlayer.play();
                img.src = 'http://localhost/socialmusic/resources/img/pause-button.png';
            })

            suggestionContainer.appendChild(divSong);
        });
    })
    .catch((error) => console.log(error));
