<?php
include_once 'helpers/html_helpers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Civilisations 2: The Rebirth</title>
    <?php echo html_helpers::get_styles() ?>

    <style>
        .thumbnail {
            position: relative;
        }

        .caption {
            position: absolute;
            top: 45%;
            left: 0;
            width: 100%;
        }

        .size {
            height: 600px;
            width: 100%;
        }
    </style>
</head>
<body>
<?php echo html_helpers::get_navbar() ?>
<div id="carouselExampleControls" class="carousel slide size" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item size active">
            <div class="thumbnail text-center">
                <img class="d-block size" src="images/background.jpg" alt="First slide">
                <div class="caption" style="color: #ffffff;">
                    <h1>Civilisations 2: The Rebirth</h1>
                    <p>A Modded Minecraft Modpack</p>
                </div>
            </div>

        </div>
        <div class="carousel-item size">
            <div class="thumbnail text-center">
                <img class="d-block size" src="images/background.jpg" alt="First slide">
                <div class="caption" style="color: #ffffff;">
                    <h1>Civilisations 2: The Rebirth</h1>
                    <p>A Modded Minecraft Modpack</p>
                </div>
            </div>
        </div>
        <div class="carousel-item size">
            <div class="thumbnail text-center">
                <img class="d-block size" src="images/background.jpg" alt="First slide">
                <div class="caption" style="color: #ffffff;">
                    <h1>Civilisations 2: The Rebirth</h1>
                    <p>A Modded Minecraft Modpack</p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container-fluid justify-content-center">
    <div class="row">
        <hr>
    </div>
    <div class="row justify-content-center">
        <h1>The project</h1>
    </div>
    <div class="row">
        <hr>
    </div>
    <div class="row justify-content-center">
        <p>Civilisations 2: The Rebirth is a Modded Minecraft Modpack which is made for experienced players. It has hundreds of mods and is filled with challenging custom recipes to make the pack unique and fun. The many mods allows the pack to be enjoyable for all players.</p>
    </div>
    <div class="row justify-content-center">
        <p>The pack is currently in Alpha stage and is always being updated and improved. We are always looking for test gamers as we develop and make the pack better. Your feedback is always helpful and appreciated. For any feedback please post in the Issues section on Github.
            Feel free to join our Discord server for any queries or questions about the pack.</p>
    </div>
</div>
<hr>

<?php echo html_helpers::get_footer() ?>
<?php echo html_helpers::get_scripts() ?>
</body>
</html>

