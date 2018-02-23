Načtení seznamu oblíbených obchodů z JSON souboru
=================================================

1. Prohlédni si soubor "``stores.json``" v této složce.
2. Soubor je ve formátu JSON, což je textový formát pro ukládání a přenos dat používaný nejen na webu. Viz https://www.w3schools.com/js/js_json_intro.asp.
3. V tomto souboru naleznete "pole" (seznam), ve kterém jsou položky se dvěma vlastnostmi "``id``" a "``name``", které reprezentují jednotlivé obchody. Každý obchod má tedy identifkátor a název.
4. Uprav svoji webovou stránku tak, abys načetla seznam obchodů ze souboru.
  - Nezapomeň si soubor zkopírovat do svého editoru a co je důležité, **umísti ho do složky "data"**, abys s ním mohla pracovat.
  - Po zkopírování souboru pro jistotu změň oprávnění na 777 tak, že na soubor v editoru klikneš pravým tlačítkem myši vybereš "Permission" a do textového pole vepíšeš 777.
  - Můžeš použít Tvoji dříve vytvořenou funkci ``loadData``, kterou sis vytvořila dříve a měla bys jí najít v souboru ``functions.php``.
  - Funkce ``loadData`` využívá file_get_contents($fileName) (http://php.net/manual/en/function.file-get-contents.php) pro načtení obsahu souboru a provádí převedení z formátu JSON do pole, k čemuž slouží funkce ``json_decode($json, true)`` (http://php.net/manual/en/function.json-decode.php).
5. Až budeš mít načtené všechny oblíbené obchody, uprav svou webovou stránku tak, abys místo výpisu HTML značek <option> staticky vypsala oblíbené obchody získané ze souboru.
  - Budeš k tomu potřebovat použít nějaký cyklus a funkci pro výpis a práci s proměnnou typu pole.
6. Ve výsledku bys pak měla na webové stránce mít možnost vybrat nějaký z těchto obchodů pro přidání nové položky nákupního seznamu místo těch, které jsme do stránky napsali dříve.

