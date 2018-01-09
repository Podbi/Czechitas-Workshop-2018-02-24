Zobrazení seznamu všech přidaných položek
=========================================

1. Položky už umíme přidávat, ale doposud jsme si je vypisovali pouze "vývojářsky" pomocí ``var_dump``, což může posloužit nám vývojářům, ale pro naše návštěvníky se takový výpis nehodí.
2. Nyní přejdeme k tomu, jak můžeme položky poměrně hezky vypsat do přehledné tabulky.
3. V přiloženém PHP souboru "``shopping_list.php``" je naznačená struktura tabulky, kterou můžeš pro výpis použít.
4. Tvým úkolem nyní bude použít cyklus ``foreach`` k tomu, abys z proměnné ``$_SESSION`` získala všechny položky nákupního seznamu, které zde máme uložené, a každou vypsala na řádek tabulky.
 - Jak na tabulky se můžeš podívat tady https://www.w3schools.com/html/html_tables.asp
5. Podívej se, v jaké struktuře máme v ```$_SESSION``` jednotlivé nákupní položky uložené.
  - Proměnná ``$_SESSION`` je pole, ve které máme klíč "``shopping_list``".
  - Když se podíváš do ``$_SESSION['shopping_list']``, zjistíš, že v ní je další pole (seznam), ve kterém už jsou jednotlivé položky.
  - Každá položka je jeden prvek pole a má vlastnosti "``title``", "``store``", "``quantity``" a "``price``", které bychom chtěli vypsat.
6. Malá nápověda se ukrývá v souboru "``shopping_list.php``" skrytá v zakomentované části kódu.

