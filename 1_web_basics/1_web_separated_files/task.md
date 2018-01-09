První krok k vlastní webové stránce
===========================================

1. Máme připravenou základní HTML kostru webu,
ze které budeme vycházet a kterou budeme dále celé odpoledne upravovat.
2. V této první odpolední části si ukážeme, jak v praxi použít většinu základních konstrukcí zmíněných v dopolední části.
Hlavně si ale vysvětlíme a ukážeme některé základní myšlenky, jak psát web.
4. V základním souboru index.php je prozatím pouze HTML a CSS.
To nám vytvoří základní kostru a navíc bude web i hezky vypadat. Soubor ale nemá koncovku .html, jak by tomu mohlo mít.
Dali jsme mu rovnou koncovku .php, aby po provedení změny už webový server věděl, že případný PHP kód má zpracovat a vykonat.
5. Hned na začátek si přidáme užitečný kousek kódu.
Abychom viděli případné chybové výpisy, které se nám mohou během vývoje hodit, potřebujeme do stránky na první řádky uvést několik příkazů. Konkrétně tyto:
`ini_set('display_errors', 1);`
`ini_set('display_startup_errors', 1);`
`error_reporting(E_ALL);`
 - Jedná se o zavolání funkce "`ini_set()`", pomocí které přepeneme nastavení na "display_errors" na hodnotu "1", což znamená, že chceme zobrazovat chyby.
 - Obdobně zavoláme "`display_startup_errors()`".
 - A na závěr funkce "`error_reporting()`", což je další funkce, kterou PHP řekneme, že chceme vidět všechny chyby, které by se případně mohly stát.
 - Pro vývoj jsou tato nastavení velmi šikovná, kdybychom ale naši stránku chtěli posléze ukázat ostatním návštěvníkům, je bezpečnější chyby nezobrazovat.
6. Prvním úkolem tedy bude tyto řádky přidat.
7. Následně si vysvěltíme a ukážeme, jak by měl být kód rozvržený,
aby jste si do budoucna učetřily práci a nemuseli některé části stále dokola opakovat.
8. Každá stránka by mohla být vytvořena zvlášť, ale bylo by zbytečné kopírování a opakování kódu.
Proto opakující se části stránky rozdělíme do samostatných souborů.
Tyto soubory následně připojíme do naší stránky.
9. Pro ukázku si přesuneme první část kódu, která se bude na každé stránce opakovat, do samostatného souboru.
Touto částí je tag `<head>` i s jeho obsahem. Bude vždy na každé stránce, proto nám nic nebrání v tom ho přesunout
do souboru **head.html** a tento soubor potom připojit v odpovídajícím místě.
10. Vaším úkolem pro tuto část bude stejným způsobem oddělit do samostatných souborů tyto části:
 - menu nacházející se mezi tagy `<nav></nav>` do souboru **menu.php**
 - hlavičku webu nacházející se mezi tagy `<header></header>` do souboru **header.php**
 - patičku webu nacházející se mezi tagy `<footer></footer>` do souboru **footer.php**
 Tyto soubory poté zpět připojte na odpovídající místo, aby výsledný web měl stejnou podobu jako na začátku.