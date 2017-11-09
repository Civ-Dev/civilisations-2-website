<?php
include_once 'helpers/html_helpers.php';
require_once 'vendor/curl/curl/src/Curl/Curl.php';

$server_ip = "";
$server_port = 25565;

?>

<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://mcapi.us/server/status?ip=s.nerd.nu');
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result);
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
<!-- todo complete this! -->
<br>
<div class="container text-center">
    <div class="row">
        <h1>
        <?php echo $obj->motd; ?>
        </h1>
    </div>
    <div class="row">
        <?php if ($obj->online){
            echo "The server is online!";
        }else {
            echo "The server appears to be offline this should be fixed soon!";
        }
        ?>
    </div>
    <div class="row">
        <div class="col">
            Max players:
        </div>
        <div class="col">
            <?php echo $obj->players->max; ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            Current player count:
        </div>
        <div class="col">
            <?php echo $obj->players->now; ?>
        </div>
    </div>
</div>

<?php echo html_helpers::get_footer() ?>
<?php echo html_helpers::get_scripts() ?>
</body>
</html>