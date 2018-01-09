Dynamické změny obsahu na webu a použití funkcí
===========================================
1. V této části si ukážeme praktické použití funkcí a konstant.
2. Vytvoříme si soubor **functions.php**, do kterého si budeme vkládat všechny funkce,
které budeme nadále používat na našem webu. Tento soubor si připojíme do našeho hlavního souboru **index.php** pomocí
příkazu `include_once`.
3. Jako první si zde ale vytvoříme konstantu `WEB_TITLE`, ve které si nastavíme obecný název
 pro náš web a který budeme všude používat. Funkce se vytváří pomocí funkce `define()`.
4. K této konstantě si zaráz vytvoříme i funkci `getWebTitle()`, která nám bude získávat a vracet obsah této konstanty.
5. Nyní, když máme vytvořenou tuto funkci, nahradíme staticky definovaný text ve všech částech webu pomocí této funkce.
nahradíme ho v souborech **header.php**, **footer.php** a **index.php**
6. Jak jste si mohli všimnout, v souboru **footer.php** máme ještě staticky napsaný rok. Ten se ale každý rok mění :-)
Proto by bylo dobré toot nechat na serveru, aby vždy zobrazoval aktuální rok.
Vytvořte tedy v souboru **functions.php** novou funkci, která bude vracet aktuální rok.
_(Aktuální rok se získá pomocí příkazu `date('Y')`)_.
Tuto funkci poté použijte v soubrou **footer.php**.