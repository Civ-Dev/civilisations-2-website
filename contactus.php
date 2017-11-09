<?php
include_once 'helpers/html_helpers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Civilisations 2: The Rebirth</title>
    <?php echo html_helpers::get_styles() ?>
</head>
<body>
<?php echo html_helpers::get_navbar() ?>

<br>

<div class="container-fluid">
    <div class="row justify-content-center">
        <h1>Contact us</h1>
    </div>
    <br>
    <div class="row justify-content-center">
        <p>
            some text <br> goes <br> here
        </p>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col mx-auto text-center">
            <a href="https://github.com/Civ-Dev"> <img height=100 width="100" src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Mark.png" alt="..."> </a>
            <p>Github is where the main developing of the game happens. You can post issues and even improvements through Github.</p>
        </div>
        <div class="col mx-auto text-center">
            <a href="https://discord.gg/hunbYNV"> <img height=100 width="100" src="https://discordapp.com/assets/2c21aeda16de354ba5334551a883b481.png" alt="..."> </a>
            <p>Discord is what we use to communicate and talk to players and where players can recieve updates and talk to staff.</p>
        </div>
        <div class="col mx-auto text-center">
            <a href="https://github.com/Civ-Dev"> <img height=100 width="150" src="https://media-corp.cursecdn.com/attachments/0/204/logo3.png" alt="..."> </a>
            <p>Curse is where you can access the game files and download the game and updates. The game is also available through the curse app.</p>
        </div>
    </div>
    <!--
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="media">
                <div class="media-middle"> <a href="https://github.com/Civ-Dev"> <img height=100 width="100" class="media-object" src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Mark.png" alt="..."> </a> </div>
                <div class="media-body">
                    <h2 align="center" class="media-heading">Github</h2>
                    Github is where the main developing of the game happens. You can post issues and even improvements through Github. </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="media">
                <div class="media-middle"> <a href="https://discord.gg/hunbYNV"> <img height=100 width="100" class="media-object" src="https://discordapp.com/assets/2c21aeda16de354ba5334551a883b481.png" alt="..."> </a> </div>
                <div class="media-body">
                    <h2 align="center" class="media-heading">Discord</h2>
                    Discord is what we use to communicate and talk to players and where players can recieve updates and talk to staff. </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="media">
                <div class="media-middle"> <a href="https://minecraft.curseforge.com/projects/civ2"> <img height="120" width="140" class="media-object" src="https://media-corp.cursecdn.com/attachments/0/204/logo3.png" alt="..."></a></div>
                <div class="media-body">
                    <h2 align="center" class="media-heading">Curse</h2>
                    Curse is where you can access the game files and download the game and updates. The game is also available through the curse app. </div>
            </div>
        </div>
    </div>
    -->
</div>
<?php echo html_helpers::get_scripts() ?>
</body>
</html>