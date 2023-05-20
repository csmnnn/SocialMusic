function fetchAllUsers() {
    fetch('../php/fetchAll.php')
        .then((response) => response.json())
        .then()
        .catch((error) => console.log(error));
}
