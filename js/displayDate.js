const date = new Date();
const heading = document.getElementById('h1-discover');
var month = date.getMonth() + 1;
if (month < 10) 
    month = '0' + month;

heading.innerHTML = "Discover Daily | " 
                    + date.getDate() + "." 
                    + month + "." 
                    + date.getFullYear();
