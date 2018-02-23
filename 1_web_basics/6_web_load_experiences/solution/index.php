<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("functions.php");

$title = "FmPvd.";
$name = "Jan";
$surname = "Trávníček";

$owner = "$title $name $surname";
$about = "Dneska jsem ten nejlepší školitel.";
$showAbout = true;

$workExperiences = [
    [ 'company' => 'Facebook', 'years' => 3 ],
    [ 'company' => 'Google', 'years' => 2 ],
    [ 'company' => 'IBM', 'years' => 1 ],
    [ 'company' => 'Dixons', 'years' => 5 ],
];

$workExperiences = loadData(WORK_EXPERIENCES_FILE);

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
            <h1><?php echo "$owner"; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h4>Pracovní zkušenosti</h4>
            <ul>
                <?php
                foreach($workExperiences as $workExperience) {
                    $company = $workExperience['company'];
                    $from = $workExperience['from'];
                    $to = $workExperience['to'];
                    $years = countYears($from, $to);

                    // Bonus task
                    if ($years == 1) {
                        $yearsWord = 'rok';
                    } elseif ($years >= 2 && $years <= 4) {
                        $yearsWord = 'roky';
                    } else {
                        $yearsWord = 'let';
                    }

                    echo "<li>$company: ($from - $to) $years $yearsWord</li>";
                }
                ?>
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

