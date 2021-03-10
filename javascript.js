function init(){
    console.log("Init...");
}

function addUsers() {
    var cell = document.getElementById('saved-contacts');
    var info  = document.getElementById('username').textContent;

    // Rellenar div
    //cell.innerHTML += "<br>"+info;
    cell.innerHTML += "<tr><td id=\"first-row\">"+info+"</td></tr>";
}