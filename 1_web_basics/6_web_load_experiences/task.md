Zobrazení pracovních zkušeností uložených v souboru
===========================================
1. V posledním úkolu se zaměříme na získání informací z nějakého externího zdroje.
V tomto případě to bude pro začátek načtení dat ze souboru. K tomuto účelu si vytvoříme dvě funkce,
které možná využijeme i v dalších úkolech.
2. Už máme připravený soubor **work-experiences.json** v adresáři data. Když se do něj podíváte,
uvidíte už předpřipravená základní data.
3. V souboru **functions.php** musíme vytvořit dvě funkce pro načtení dat a uložení z a do souboru.
Tyto dvě funkce pojmenujeme `loadData()` a `saveData()`.
4. Pro jednoduchost navíc vytvoříme druhou konstantu `WORK_EXPERIENCES_FILE`, do které zadám cestu k požadovanému souboru,
aby jsme ji mohli jednodušeji získávat.
5. Funkce máme vytvořené a tak teď můžeme data ze souboru načíst. Proto si upravíme proměnnou
`$workExperiences`, do které načteme data přímo ze souboru pomocí naší funkce.
6. Když se podíváte na data uložená v souboru, zjistíte, že se struktura dat mírně liší od našeho původního pole.
Proto se musí i upravit výpis. Upravíme tedy výpis tak, aby zobrazoval kromě firmy také datum od kdy a do kdy je daná pracovní zkušenost.
Kód s podmínkou na formátování roků pro teď můžete zakomentovat.
7. No a na závěr jeden bonusový úkol za bludišťáka :-)
Pro ty, kdo by se chtěl dopracovat k původnímu výsledku s výpisem let, je tu zadání pro úpravu.
Vytvořte funkci, která z dat od a do kdy trvala pracovní zkušenost vypočítá počet let.
Následně toto použijte zpět ve výpisu a vypište počet let pro každou pracovní zkušenost.
