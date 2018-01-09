Odeslání formuláře pomocí metody POST místo GET
===============================================

1. Už jsme si povídali o tom, že formulář můžeme odeslat pomocí metody ``GET``, a že pak vidíme odesílané hodnoty v URL adrese v adresním řádku prohlížeče.
2. Kromě metody ``GET`` můžeme formuláře ještě odesílat metodou ``POST``, která se hodí pro rozsáhlejší formuláře, a kterou si vyzkoušíme.
3. Ve formuláři (element ``<form>``) je atribut "``method``", ve kterém máme zatím uvedeno slovo "``get``", změň ho na "``post``" a webový prohlížeč zajistí, že bude formulář odesílán metodou ``POST``.
4. Zpracování formuláře jsme zatím dělali pomocí využití proměnné ``$_GET``. Analogicky s ní existuje i proměnná ``$_POST``, která slouží pro hodnoty z formuláře odeslané metodou ``POST``. Tu budeš teď potřebovat.
5. Uprav svou webovou stránku tak, aby byla nová položka nákupního seznamu přidána pomocí metody ``POST`` namísto ``GET``.
6. Otázka na závěr. Když budeš zkoušet přidat položku v prohlížeči, co se změnilo? :-)
