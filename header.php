<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">

    <?php wp_head(); ?>

</head>
<body>
<!--Кнопка Заказать расчет-->
<aside>
    <button class="calculate_index" data-toggle="modal" data-target="#modalForm">Заказать расчет</button>
</aside>
<!-------------------------->
<!--Модальное окно-->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Заявка на расчет проекта</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="index-form">
                    <div class="form-group">
                        <input type="text" class="form-control" name="user_name" placeholder="Представьтесь, пожалуйста" required>
                    </div>
                    <div class="form-group">
                        <input id="phone" type="tel" class="form-control" name="user_phone" placeholder="Ваш телефон" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="user_project" placeholder="Опишите Ваш проект" required>
                    </div>

                    <input id="submit" type="submit" class="btn btn-primary" value="Отправить заявку">
                </form>
                <div class="result"></div>
            </div>
            <div class="modal-footer">
                <div class="chekbox_container">
                    <label for="check_box">
                        <input id="check_box" type="checkbox" name="user_checkbox" value="Отправить заявку" required aria-required="true" checked>
                        Нажимая кнопку «Отправить заявку», я даю согласие на обработку моих персональных данных, с <a href="#">условиями политики ознакомлен</a>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------------------->
<!--Верхнее меню шапки-->
<div class="container-fluid header-menu">
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
                            <img src="/img/nav1.png"  style="width: 16px; height: 16px;">
                            <a class="scale" href="#">Мариинск</a>
                            <div>
                                <?php echo get_theme_mod('number-header_code')?>
                            </div>
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
<?php //echo get_theme_mod('adress-header_code')?>
