<?php

$pages = [
    'index' => 'Domů',
    'shopping_list' => 'Nákupní seznam',
    'stores_management' => 'Obchody',
    'facebook' => 'Facebook profil'
];

?>

<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Menu</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.php"><?php echo getWebTitle(); ?></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
                echo getMenu($pages);
            ?>
        </div>
    </div>
</nav>