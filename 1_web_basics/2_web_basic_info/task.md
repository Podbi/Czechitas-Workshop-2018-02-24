Zobrazení základních informací o sobě
===========================================

## Úvod
Máme přichystanou základní rozdělení webu do jednotlivých souborů.
Nyní se můžeme věnovat úpravám jednotlivých částí.

V této části si zkusíme nadefinovat pár proměnných a následně si je vypsat.
Budeme pracovat se soubory **index.php** a **header.php**

## Úkol
1. Na začátku souboru **index.php** (hned po příkazech na zapnutí chybových hlášek) vytvořte tři proměnné:
 - proměnnou obsahující titul osoby
 - proměnnou obsahující jméno
 - proměnnou obsahující příjmení
2. Dále vytvořte proměnnou,
která spojí tyto tři proměnné do jednoho řetězce tak,
aby po vypsání dával dohromady celé jméno i s titulem.
3. Tuto proměnnou vypište v souboru **index.php** do tagu `<h1></h1>`
a v souboru **header.php** do tagu `<span class="subheading"></span>`.
Takto budete mít vypsané jméno na obou místech a pokud ho někdy budete chtít upravit,
stačí pouze na jednom místě.
4. Vaším úkolem je vytvořit podmíněný blok v sekci **O mně**.
Vytvořte proměnnou `$about`,
ve které bude nějaký text o vás.
Poté druhou proměnnou `$showAbout` s obsahem typu
boolean (true nebo false).
5. Proměnnou `$about` s textem o vás vypište za nadpis **O mně** (za tag `<h4></h4>`) místo aktuálního odstavce,
který se tam aktuálně nachází.
Zobrazení tohoto odstavce bude ale podmíněno proměnnou `$showAbout`.
Pokud bude mít tato proměnná hodnotu `true`, zobrazí se tento odstavec.
V opačném případě se ostavec nezobrazí.
