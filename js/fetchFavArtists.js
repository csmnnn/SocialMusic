var checkboxesArray = [];
var fetchedArtists = [];

var art = { "artists": [] };
var indexes = { "indexesOfCheckedArtists": [] };

fetch('../php/fetchFavArtists.php')
    .then((response) => response.json())
    .then((data) => {
        var clicked = 0;
        var artists = data;

        // Save every artist in a JSON
        artists.forEach(element => {
            fetchedArtists.push(element);
            element.forEach(artist => {
                art["artists"].push({ "name": artist[0], "img": artist[1] });
            })
        });

        // Save each artist in local storage
        art["artists"].forEach(element => {
            localStorage.setItem(element.name, JSON.stringify(element))
        });

        var divCheckboxes = document.getElementById('div-checkboxes');
        const btnEditArtists = document.getElementById('btnEditArtists');
        const btnCloseModal = document.getElementById('close-modal');

        // When pressing the edit artists button, display an list of checkboxes
        btnEditArtists.addEventListener('click', () => {
            if (clicked === 0) {
                clicked++;
                divCheckboxes.classList.add('show');

                // Create checkbox for every record
                fetchedArtists.forEach(element => {
                    element.forEach(artist => {
                        var divChoice = document.createElement('div');
                        var checkbox = document.createElement('input');
                        var label = document.createElement('label');

                        checkbox.type = 'checkbox';
                        checkbox.id = "artist-" + artist[0];
                        checkboxesArray.push(checkbox);

                        label.htmlFor = checkbox.id;
                        label.innerHTML = artist[0];

                        divChoice.appendChild(checkbox);
                        divChoice.appendChild(label);
                        divChoice.classList.add('choice');

                        divCheckboxes.appendChild(divChoice);
                    });
                });

                // Verify which checkboxes are checked
                checkboxesArray.forEach(checkbox => {
                    checkbox.addEventListener('click', (event) => {
                        var ind = checkboxesArray.indexOf(checkbox);
                        if (event.target.checked) {// Add to the checkedInputs array if the input is checked 
                            indexes["indexesOfCheckedArtists"].push({ "index": ind });
                            localStorage.setItem("artistToShow", JSON.stringify(indexes["indexesOfCheckedArtists"]));
                        }
                        else {  // Remove the input which was unchecked
                            let localStorageItemIndex = indexes["indexesOfCheckedArtists"]
                                .indexOf(indexes["indexesOfCheckedArtists"][ind]);
                            indexes["indexesOfCheckedArtists"].splice(localStorageItemIndex, 1);
                            localStorage.setItem("artistToShow", JSON.stringify(indexes["indexesOfCheckedArtists"]));
                        }
                    });
                });
            }
        });

        // Close the modal
        btnCloseModal.addEventListener('click', () => {
            divCheckboxes.classList.remove('show');
            console.log(indexes["indexesOfCheckedArtists"]);
        });

        var tisokiName = JSON.parse(localStorage.getItem('TISOKI')).name;
        var tisokiImg = JSON.parse(localStorage.getItem('TISOKI')).img;

        var sdName = JSON.parse(localStorage.getItem('SVDDEN DEATH')).name;
        var sdImg = JSON.parse(localStorage.getItem('SVDDEN DEATH')).img;

        var k2Name = JSON.parse(localStorage.getItem('KNOCK2')).name;
        var k2Img = JSON.parse(localStorage.getItem('KNOCK2')).img;

        createLi(tisokiName, tisokiImg);
        createLi(sdName, sdImg);
        createLi(k2Name, k2Img);
    })
    .catch((error) => console.log(error));

function createLi(name, image) {
    var ol = document.querySelector('.favourite-artists-list .favourites-ol');
    var li = document.createElement('li');
    li.classList.add("favourites-li");

    var span = document.createElement('span');
    span.classList.add("favourite-image");

    var img = document.createElement('img');
    img.src = image;
    img.classList.add('fav-img');
    span.appendChild(img);

    var anch = document.createElement('a');
    anch.href = "../php/artist.php";
    anch.innerHTML = name;
    anch.classList.add('favourite-name');

    li.appendChild(span);
    li.appendChild(anch);

    ol.appendChild(li);
}
