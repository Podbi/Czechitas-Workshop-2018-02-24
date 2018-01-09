Úprava menu pro jednoduchou rozšiřitelnost do budoucna
===========================================
1. Jak to často na webu bývá, struktura se často mění a přibývají nové stránky.
Na druhou stranu se také stránky ruší. Pokud se toto dotkne i položek v menu, je potřeba
mím možnost toto rychle upravit. Aktuálně je menu staticky nadefinované a pro rozsáhlejší
menu by úpravy mohly být složitější nebo zlouhavé. Nyní si ukážeme jednoduchou úpravu menu
a vytvoříme dvě funkce pro výpis. Pracovat budeme se soubory **menu.php** a **functions.php**.
2. V souboru **menu.php** si vytvoříme pole s jednotlivými položkami menu.
Každá tato položka bude obsahovat informaci o souboru, na který se odkaz bude odkazovat,
a název položky v menu. Vytvoříme tedy pole `$pages` s těmito položkami.
3. Nyní vytvoříme dvě funkce:
  - funkce `createMenuItem()` - tato funkce nám vytvoří jednu položku menu
  - funkce `getMenu()` - funkce si vytvoří pomocí předchoyí funkce všechny položky, složí menu a vrátí ho
4. Když máme tyto funkce vytvořené, nahradíme starý výpis v souboru **menu.php** výpisem pomocí funkce `getMenu()`.