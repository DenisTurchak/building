<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">

    <?php wp_head(); ?>

</head>
<body>
<!--Верхнее меню шапки-->
<div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="header-logo col">
                    <?php echo the_custom_logo(); ?>
                </div>
                <nav id="navbar-menu" class="navbar navbar-expand-lg navbar-light header-nav">
                    <?php wp_nav_menu(array(
                        'container' => 'div',
                        'menu' => 'Верхнее меню шапки',
                        'theme_location' => 'header-up-menu',
                        'container_class'   => 'navbar-collapse bl-menu col',
                        'container_id'      => 'navbarSupportedContent',
                        'menu_class' => 'navbar-nav bg-menu-color',
                        'fallback_cb' => 'wp_page_menu',
                        'items_wrap ' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 0,
                        'walker' => new description_walker()
                    ));
                    ?>
                </nav>
                <div class="header-number col">
                    <div>
                        <span class="city">
                            <img src="/img/nav.png"  style="width: 16px; height: 16px;">
                            <a class="scale" href="#">Мариинск</a>
                        </span>
                    </div>
                </div>
            </div>
    </div>
</div>
<!---------------------->
<!--Нижнее меню шапки-->
<div class="container-fluid main-bottom-menu">
<!--    <nav id="navbar-menu" class="navbar navbar-expand-lg navbar-light header-nav">-->
        <?php wp_nav_menu(array(
            'container' => 'div',
            'menu' => 'Нижнее меню шапки',
            'theme_location' => 'footer-down-menu',
            'container_class'   => 'navbar-collapse bl-menu col main-down-menu',
            'container_id'      => 'navbarSupportedContent',
            'menu_class' => 'navbar-nav bg-menu-color',
            'fallback_cb' => 'wp_page_menu',
            'items_wrap ' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 0,
            'walker' => new description_walker()
        ));
        ?>
<!--    </nav>-->
</div>
<!----------------->

<?php //echo get_theme_mod('text-logo-header_code')?>
<?php //echo get_theme_mod('number-header_code')?>
<?php //echo get_theme_mod('adress-header_code')?>
