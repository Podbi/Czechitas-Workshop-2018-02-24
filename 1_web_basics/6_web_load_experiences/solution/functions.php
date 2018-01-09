<?php

define('WEB_TITLE', 'Můj první web');
define('WORK_EXPERIENCES_FILE', './data/work-experiences.json');

/**
 * Funkce ziska nastaveny nazev z konstanty a vrati ho.
 */
function getWebTitle()
{
    return WEB_TITLE;
}

/**
 * Funkce ziska aktualni rok pomoci funkce date() a tento rok vrati.
 */
function getYear()
{
    return date('Y');
}

/**
 * Funkce zpracuje predane pole s daty k menu a z vytvorenych polozek zkompletuje menu.
 * To pote vrati.
 */
function getMenu(array $items)
{
    $menu = '<ul class="nav navbar-nav navbar-right">';

    foreach ($items as $link => $title) {
        $menu .= createMenuItem($link, $title);
    }
    $menu .= '</ul>';

    return $menu;
}

/**
 * Funkce vytvori odkaz na danou stranku a obali ji potrebnym HTML tagem.
 * Tato 
 */
function createMenuItem($link, $title)
{
    return "<li>
                <a href='{$link}.php'>{$title}</a>
            </li>";
}

/**
 * Funkci nacte data z predaneho souboru, data zpracuje a nasledne vrati.
 */
function loadData($file)
{
    $fileContent = file_get_contents($file);
    $data = json_decode($fileContent, true);

    return $data;
}

/**
 * Funkci jsou predany data v poli $data a soubor $file, kam maji byt data ulozena.
 * Data se se upravi do formatu vhodneho pro ulozeni a nasledne se zapisi do souboru.
 */
function saveData($file, array $data)
{
    $json = json_encode($data);
    file_put_contents($file, $json);
}

/*
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
*/
