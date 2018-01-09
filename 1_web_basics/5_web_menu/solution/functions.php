<?php

define('WEB_TITLE', 'Můj první web');

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

