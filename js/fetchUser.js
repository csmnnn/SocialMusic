function defaultProfilePicture() {
    fetch('../php/fetchUser.php')
        .then((response) => response.json())
        .then((data) => {
            var profilePicture = document.getElementById('profile-img');
            profilePicture.src = data.profile_picture;
        })
        .catch((error) => console.log(error));
}

defaultProfilePicture();

function setProfilePicture() {}