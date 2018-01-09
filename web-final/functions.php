<?php

define('WEB_TITLE', 'Můj první web');
define('WORK_EXPERIENCES_FILE', './data/work-experiences.json');

function getWebTitle()
{
    return WEB_TITLE;
}

function getYear()
{
    return date('Y');
}

function getMenu(array $items)
{
    $menu = '<ul class="nav navbar-nav navbar-right">';

    foreach ($items as $link => $title) {
        $menu .= createMenuItem($link, $title);
    }
    $menu .= '</ul>';

    return $menu;
}

function createMenuItem($link, $title)
{
    return "<li>
                <a href='{$link}.php'>{$title}</a>
            </li>";
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

function countYears($days)
{
    return floor($days / 365);
}
