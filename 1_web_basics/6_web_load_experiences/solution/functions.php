<?php

define('WEB_TITLE', "Super web");
define('WORK_EXPERIENCES_FILE', "./data/work-experiences.json");

function getWebTitle()
{
    return WEB_TITLE;
}

function getYear()
{
    return date('Y');
}

function createMenuItem($fileName, $title)
{
    $menuItem = '<li>';
    $menuItem .= "<a href='$fileName.php'>$title</a>";
    $menuItem .= '</li>';

    return $menuItem;
}

function getMenu($pages)
{
    $menu = '<ul class="nav navbar-nav navbar-right">';
    foreach ($pages as $fileName => $title) {
        $menu .= createMenuItem($fileName, $title);
    }
    $menu .= "</ul>";
    
    return $menu;
}

function loadData($file)
{
    $fileContent = file_get_contents($file);
    $data = json_decode($fileContent, true);

    return $data;
}

function saveData($file, array $data)
{
    $json = json_encode($data);
    file_put_contents($file, $json);
}

function countDays($from, $to)
{
    $fromSeconds = strtotime($from);
    $toSeconds = strtotime($to);
    $daySeconds = 60*60*24;

    return floor(($toSeconds - $fromSeconds) / $daySeconds);
}

function countYears($from, $to)
{
    $days = countDays($from, $to);
    return floor($days / 365);
}
