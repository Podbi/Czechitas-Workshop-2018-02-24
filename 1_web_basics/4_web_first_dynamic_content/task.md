Dynamické změny obsahu na webu a použití funkcí
===============================================

## Úvod
Ukážeme si praktické použití funkcí a konstant pro vytvoření prvního dynamického obsahu.

## Úkol
1. Vytvoříme si soubor **functions.php**,
do kterého si budeme vkládat všechny funkce,
které budeme nadále používat na našem webu.
Tento soubor si připojíme do našeho hlavního souboru **index.php** pomocí příkazu `include_once`.
2. Jako první si zde ale vytvoříme konstantu `WEB_TITLE`,
ve které si nastavíme obecný název pro náš web a který budeme všude používat.
Konstanty se vytváří pomocí funkce `define()`.
3. K této konstantě si zaráz vytvoříme i funkci `getWebTitle()`,
která nám bude získávat a vracet obsah této konstanty.
4. Nyní,
když máme vytvořenou tuto funkci,
nahradíme staticky definovaný text ve všech částech webu pomocí této funkce.
Výskyt takového textu můžeme najít v souborech **header.php**,  **head.php**, **footer.php** a **menu.php**.

## Bonus
5. Jak jste si mohli všimnout,
v souboru **footer.php** máme ještě staticky napsaný rok.
Ten se ale každý rok mění, že? :-)
Proto by bylo dobré psaní aktuálního roku nechat na serveru.
Vytvořte tedy v souboru **functions.php** novou funkci,
která bude vracet aktuální rok.
_Aktuální rok můžete získát pomocí zavolání funkce `date('Y')`_.
Tuto funkci poté použijte v soubrou **footer.php**.
