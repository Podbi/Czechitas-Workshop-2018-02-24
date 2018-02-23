<?php

define('WEB_TITLE', "Super web");

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
