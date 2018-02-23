<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("functions.php");

$facebookApiToken = 'SOME_SECRET_ACCESS_TOKEN';

$url = "https://graph.facebook.com/me?access_token=" . $facebookApiToken . "&fields=id,first_name";
$response = getApiData($url);

$owner = "Ferda Mravenec";

?>

<!DOCTYPE html>
<html lang="en">

<?php
include_once("head.php");
?>

<body>

<?php
include_once("menu.php");
include_once("header.php");
?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h4>Můj profil</h4>
            <p>
            </p>
    </div>
</div>

<hr>

<?php
include_once("footer.php");
?>

</body>

</html>
