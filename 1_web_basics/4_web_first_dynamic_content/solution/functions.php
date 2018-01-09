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


