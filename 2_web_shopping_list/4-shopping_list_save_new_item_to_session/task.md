Uložení přidané položky do SESSION
==================================

1. Teď se podíváme na jeden koncept, který se v PHP hodně používá - ``Sessions``.
 - Sessions se překládá jako "sezení", čili takové povídání mezi prohlížečem návštěvník a webovou stránkou.
2. Sessions si můžeš představit jako **soubor, který obsahuje data společná pro prohlížeč nějakého konkrétního uživatele** (třeba Firefox, Internet Explorer či Google Chrome) **a náš server, na kterém je vykonávána naše webová stránka**.
 - Sessions je společný pro jednoho uživatele a jeho prohlížeč, můžeme říct třeba "Alenku", a pro naši webovou stránku, které můžeme říkat třeba "Cool Nákupní seznam".
 - Pokud bude "Alenka" prohlížet náš "Cool Nákupní seznam", bude mít vlastní Session soubor. V případě, že na naši stránku příjde její kamarádka "Klára", bude mít vlastní Session soubor.
 - My vývojáři můžeme Sessions využít tak, že si budeme do Sessions ukládat nějaké hodnoty, které si chceme o "Alence" pro náš "Cool Nákupní seznam" pamatovat v rámci její návštěvy.
 - Dává to trošku smysl? Podívejme se, jak na Sessions v PHP.
3. Sessions jsou v PHP podobně jako ``GET`` přístupná pomocí pole. Tedy ``$_SESSION``.
 - Jako vývojářka se nemusíš starat o to, aby se Sessions ukládaly, to zajistí PHP za Tebe.
 - Abys mohla se Sessions ve své webové stránce nějak pracovat potřebuješ je "nastartovat". Nastartování se dělá zavoláním funkce "``session_start()``" a to ideálně hned na začátku webové stránky.
 - Tím bude PHP vědět, že chceš Sessions používat a připraví Ti do `$_SESSION`` hodnoty, které tam byly předtím uloženy.
 - Do Sessions můžeš zapisovat stejně jako do jakéhokoliv jiného pole. Např. ``$_SESSION['my_name'] = 'Jane Doe';``
 - Stejně tak můžeš ze Sessions hodnoty číst a vypisovat. Např. ``echo $_SESSION['my_name'];``
4. Pojďme si Sessions vyzkoušet. Tvůj úkol bude rozšířit Tvoji webovou stránku tak, aby se v případě, že je odeslán formulář, hodnoty z formuláře uložily do SESSION.
 - V "``shopping_list.php``" souboru už máš připravené některé kroky.
 - ``session_start()`` najdeš skoro úplně nahoře v souboru.
 - Máme tu i přípravu pole v ``$_SESSION`` s klíčem "``shopping_list``", kam si budeme jednotlivé položky ukládat.
 - V místě, kde jsme dřív pouze vypisovali, co je ve formuláři, je naznačeno, jak pokračovat.
5. Díky tomu, že si hodnoty uložíme, je nyní můžeme vypsat. Zatím to uděláme jednoduše pomocí ``var_dump``. :)
 - Tento výpis není pro uživatele moc pěkný, ale jako vývojáři si ho během vývoje můžeme dovolit použít a později to trochu zlepšíme.
