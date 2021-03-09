<?php
//Proteger nuestra pagina para las personas que no hayan iniciado session
    session_start();
   

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Please Log in");
                window.location = "index.php";
            </script>
    ';
    session_destroy();
    die();
    }

?>


<!DOCTYPE html>
<html>
	<head>
		<!--title-->
		<title>Random User</title>
        <!--javascript-->
        <!--stylesheets-->
        <link href="style.css" rel="stylesheet" type="text/css"/>
		<!--metadata-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta charset="utf-8"/>
	</head>
    <body>
        <!--
        <header>
            <div class="Header">
                <H1 class="title1">PresentationCard.com</H1>
            </div>
        </header>
    -->
    <!--MENU-->
    <nav class="menu">
        <label class="options" href="">HOME</label>
        <label class="options" href="">ABOUT</label>
        <label class="options" href="">LOGGIN</label>
        <label class="options" href="">CONTACT US</label>
        <label class="options" href="php/cerrar_sesion.php">LOG OUT</label>
    </nav>
    <br>
     <!--RIGHT PANEL-->
     <div class="sec" id="second">
        <div id="title-fsec">
            Recent People
            <table>
                <tbody>
                    <tr>
                        <td class="first-row">FIRST FRIEND</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--LEFT PANEL-->
    <div class="sec" id="first">
        <div id="title-fsec">
            Saved Contacts
            <table>
                <tbody>
                    <tr>
                        <td class="first-row">FIRST FRIEND</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--CENTER PANEL-->
    <div class="user-profile">
        <img id="avatar" src="" />
        <div id="fullname">Name</div>
        <div id="username">

        </div>
        <div class="description">
            <div>Email: <span id="email"></span></div>
            <div>City: <span id="city"></span></div>
            <div>Cellphone: <span id="cell"></span></div>
        </div>
        <div class="footer">
            <button id="btn">Next User!</button>
        </div>
    </div>
    <br>
   
    <!-- BOTTOM BUTTONS -->
    <div class="bottom">
        <!--button id="rate">Rate!</button-->
        <img id="like" src="like.png" width="80px">
        <img id="unlike" src="like.png" width="80px">
        <button id="add">Add to my friends</button>
    </div>
    
    <!--SCRIPT-->
        <script>
            var url = 'https://randomuser.me/api/';
            var btn = document.querySelector('#btn');
            var fullnameDisp = document.querySelector("#fullname");
            var avatar = document.querySelector("#avatar");
            var username = document.querySelector("#username");
            var email = document.querySelector("#email");
            var city = document.querySelector("#city");
            var cell = document.querySelector("#cell");
            btn.addEventListener("click", function(){
                fetch(url)
                .then(parseJSON)
                .then(updateProfile)
                .catch(function(err){
                    console.log(err);
                });
            });

            function parseJSON(res){
                return res.json().then(function(parsedData){
                    return parsedData.results[0];
                })
            }
            function updateProfile(data){
                console.log(data);
                    var fullname = data.name.first + " " + data.name.last;
                    fullnameDisp.innerText = fullname;
                    avatar.src = data.picture.large;
                    username.innerText = data.login.username;
                    email.innerText = data.email;
                    city.innerText = data.location.city;
                    cell.innerText = data.cell;
                }
        </script>
    </body>
</html>