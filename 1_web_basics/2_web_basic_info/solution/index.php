<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "FmPvd.";
$name = "Jan";
$surname = "Trávníček";

$owner = "$title $name $surname";
$about = "Dneska jsem ten nejlepší školitel.";
$showAbout = true;

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
            <h1>><?php echo "$owner"; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h4>Pracovní zkušenosti</h4>
            <ul>
                <li>Firma: (počet let)</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h4>O mně</h4>
            <?php
            if ($showAbout) {
                echo "<p>";
                echo $about;
                echo "</p>";
            }
            ?>
    </div>
</div>

<hr>

<?php
include_once("footer.php");
?>

</body>

</html>

