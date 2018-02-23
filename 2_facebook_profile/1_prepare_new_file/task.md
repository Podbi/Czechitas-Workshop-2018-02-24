Zobrazení základních informací z facebooku
===========================================

## Úvod
Vyzkoušíme si další možný zdroj dat.
Konkrétně to bude veřejně dostupné API facebooku.

## Úkol
1. Nejdříve si nachystáme nový soubor **facebook.php**,
v kterém bude výchozí šablona pro další úkoly.
2. Vykopíruj si soubor **facebook.php** uložený přímo v této složce do složky s ostatním webem.
3. Zároveň si vytvoř novou funkci v souboru **functions.php**,
kterou budeme používat pro přijímání dat z API.
```
function getApiData($url) {
    $request = curl_init($url);
    curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($request);
    return json_decode($response);
}
```
4. Na závěr si společně ukážeme,
jak si vygenerovat _access token_,
který potřebujeme pro ověření identity.
Token získáma na této stránce `https://developers.facebook.com/tools/explorer`.
Vybereme alespoň tato opravnění:
- email
- user_friends
- user_hometown
- user_posts
