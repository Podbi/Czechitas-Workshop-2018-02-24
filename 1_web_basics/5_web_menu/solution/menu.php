<?php
// Pole s definici jednotlivych odkazu v menu
$pages = [
    'index' => 'Domů',
    'shopping_list' => 'Nákupní seznam',
    'stores_management' => 'Obchody'
];

?>

<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Menu</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <!-- Vypsany obecny nazev webu pomoci funkce -->
            <a class="navbar-brand" href="../../4_web_first_dynamic_content/solution/index.php"><?=getWebTitle()?></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- Nove vypsane menu pomoci funkce -->
            <?php print getMenu($pages); ?>
        </div>
    </div>
</nav>
