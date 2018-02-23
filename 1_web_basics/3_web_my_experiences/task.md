Výpis pracovních zkušeností
===========================================

## Úvod
V této částo se zaměříme na procvičení polí, cyklů a podmínek.

## Úkol
1. Prvním úkolem bude vytvořit dvourozměrné pole `$workExperiences` obsahující všechny pracovní zkušenosti.
To znamená vytvořit pole, jehož položkami jsou zase pole.
2. Každá z těchto položek bude nějaká pracovní zkušenost.
Každá zkušenost bude obsahovat název firmy a počet let.
Takové pracovní zkušenosti si vytvořte minimálně tři.
3. V části **Pracovní zkušenosti** si tyto pracovní zkušenosti jednu po druhé vypíšeme pomocí cyklu `foreach`.
Místo staticky vypsaného HTML kódu tedy vytvoříme cyklus,
který bude procházet jednotlivé položky z pole `$workExperiences` a zpracuje je.
4. Z každé položky se získá firma a počet let strávených v této firmě.
Tyto informace spojte do formátu `{{firma}} - {{počet roků}} let` a vložte mezi tagy `<li></li>` a vypište je.

## Bonus
5. Nyní máme pěkně vypsané všechny pracovní zkušenosti.
Pokud by jste chtěli nějakou další přidat,
nebo nějakou smazat,
stačí jednoduše upravit pole a vše se automaticky upraví.
Bohužel ale samotné formátování textu,
konkrétně roky,
není zrovna hezké.
Přeci jen,
čeština trochu nebo i více mění tvar slova rok pro daný počet.
Proto bz jsme si i my toto měli upravit,
aby se to lépe četlo.
6. Vaším úkolem nyní bude pomocí podmínek správně zobrazovat slovo rok za každým počtem (např. 1 rok, 3 roky, 5 let).
Vytvořte podmínku,
která správně vybere toto slovo,
přířadí do proměnné `$years` a touto proměnnou nahraďte slovo let.