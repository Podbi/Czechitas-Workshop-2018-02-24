Zobrazení odeslaných hodnot z formuláře
=======================================

1. Formulář už máme připravený a můžeme přistoupit k jeho zpracování.
2. Formulář má tlačítko "**Přidat**", a když ho návštěvník stránky stiskne, dojde k odeslání formuláře.
3. Naše webová stránka tedy dostane hodnoty, které návštěvník do formuláře vepsal a může je libovolně zpracovat.
4. Formulář má ve svém HTML elementu ``<form>`` vlastnost ``method="get"``, což znamená, že když bude tlačítko stisknuto, dojde k odeslání metodou ``GET``. Hned si řekneme, co to pro nás znamená.
- ``GET`` znamená, že hodnoty všech vstupních pole formuláře (název, obchod, cena atp.) budou z formuláře odeslány do naší webové stránky a my si je můžeme zpracovat.
- Můžeme tak od návštěvníka naší stránky vyžádat vyplnění libovolných údajů a nějak si je zobrazit, uložit či jakkoliv zpracovat. V tomto případě budeme chtít přidávat položky do nákupního seznamu.
- Všechna políčka formuláře budou při odeslání formuláře připojena do URL adresy, kde je můžeme vidět ve dvojicích "``klíč=hodnota``".
- Např. bychom v URL v adresním řádku webového prohlížeče mohli vidět něco jako "``?title=Kalhoty&store=marks%26spencer&quantity=1&price=1199&add=Přidat``".
- Vyzkoušej si, zda to tak je.
5. V PHP budou všechny hodnoty z ``GET`` k dispozici ve speciální proměnné s názvem ``$_GET``.
- Proměnná ``$_GET`` je pole, které má jako klíče názvy políček ve formuláři a obsahuje odeslané hodnoty.
- Kdybychom se podívali na příklad výše, tak bude $_GET obsahovat tuto strukturu:
```
[
    "title" => "Kalhoty",
    "store" => "marks&spencer",
    "quantity" => "1",
    "price" => "1199"
]
```
- Můžeme tedy libovolnou hodnotu získat tak, že do pole přistoupíme přes daný klíč, např. ``$_GET['price']`` nám vrátí v tomto případě ``'1199'``.
6. Tvým úkolem bude využit podmínek a ``$_GET`` pole, abys v případě, že je formulář odeslán, vypsala hodnoty, které byly ve formuláři zadány, na webovou stránku.
- Abys zjistila, zda byl formulář odeslán, bude se Ti hodit podmínka "``if``" a kontrola, zda ``$_GET`` obsahuje nějakou hodnotu pomocí "``isset``". http://php.net/manual/en/function.isset.php
7. Pro výpis můžeš použít HTML značky, nebo pro zatím postačí funkce ``var_dump``, která není pro návštěvníky zrovna dvakrát vhodná, ale jelikož zatím vyvíjíme, dočasně ji můžeme využít. :-)


