<footer class="container-fluid">
    <?php wp_nav_menu(array(
        'container' => 'div',
        'menu' => 'Верхнее меню шапки',
        'theme_location' => 'header-up-menu',
        'container_class'   => 'navbar-collapse bl-menu col',
        'container_id'      => 'footer_navbarSupportedContent',
        'menu_class' => 'navbar-nav bg-menu-color footer-menu',
        'fallback_cb' => 'wp_page_menu',
        'items_wrap ' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth' => 0,
        'walker' => new description_walker()
    ));
    ?>
</footer>
<?php wp_footer() ?>
</body>
</html>