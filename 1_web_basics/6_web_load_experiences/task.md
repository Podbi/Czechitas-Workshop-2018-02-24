Zobrazení pracovních zkušeností uložených v souboru
===========================================

## Úvod
V posledním úkolu se zaměříme na získání informací z nějakého externího zdroje (databáze).
V tomto případě to bude pro začátek načtení dat ze souboru.
K tomuto účelu si vytvoříme dvě funkce,
které možná využijeme i v dalších úkolech.

## Úkol
1. Už máme připravený soubor **work-experiences.json** v adresáři data.
Když se do něj podíváte, uvidíte už předpřipravená základní data.
2. V souboru **functions.php** musíme vytvořit funkci pro načtení dat ze souboru.
Funkci pojmenujeme `loadData()`.
3. Pro jednoduchost navíc vytvoříme další konstantu `WORK_EXPERIENCES_FILE`,
do které zadáme cestu k požadovanému souboru,
aby jsme ji mohli jednodušeji získávat.
4. Funkci máme vytvořenou a tak teď můžeme data ze souboru načíst.
Proto si upravíme proměnnou `$workExperiences` v souboru **index.php**,
do které načteme data přímo ze souboru pomocí naší funkce.
5. Upravíme výpis pracovních zkušeností v souboru **index.php**,
aby nově používala pro výpis dat naši nově vytvořenou funkci.
6. Když se podíváte na data uložená v souboru,
zjistíte,
že se struktura dat mírně liší od našeho původního pole.
Proto se musí i upravit výpis zobrazení roků.
Upravíme tedy výpis tak,
aby zobrazoval kromě firmy také datum od kdy a do kdy je daná pracovní zkušenost.
_Poznámka: kód s podmínkou na formátování roků nyní nepoužijeme._

## Bonus
7. Pokud se chceš dopracovat k původnímu výsledku s výpisem let,
je tu bonusové zadání pro úpravu.
Vytvoř funkci,
která z dat `from` a `to` vypočte počet let,
kolik trvala daná pracovní zkušenost.
Následně toto použijte zpět ve výpisu a vypište počet let pro každou pracovní zkušenost.
8. Vytvoř také funkci pro uložení dat do datového souboru s názvem `saveData()`.
