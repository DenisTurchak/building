<?php
function fitnes_setup(){
    //Вывод title
    add_theme_support('title-tag');
    //Вывод logo
    add_theme_support('custom-logo', array(
        'width' => 240,
        'height' => 63
    ));
    register_nav_menus([
        'header-menu' => 'Шапка сайта',
        'footer-menu' => 'Подвал сайта'
    ]);

}
add_action('after_setup_theme', 'fitnes_setup');

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'fitnes_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function fitnes_scripts() {
    wp_enqueue_style( 'style-css', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.css' );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootsstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
}
class description_walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth, $args)
    {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
//        $class_names = ' class="'. esc_attr( $class_names ) . '"';
          $class_names = "class='nav-item'";

        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
//        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

//        $prepend = '<strong>';
//        $append = '</strong>';
        $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

        if($depth != 0)
        {
            $description = $append = $prepend = "";
        }

        $item_output = $args->before;
//        $item_output .= '<a'. $attributes .'>';
        $item_output .= "<a" . $attributes ." class='nav-link'>";
        $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
        $item_output .= $description.$args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

//Номер телефона
function ale_customize_register($wp_customize){

    $wp_customize->add_section('number-header', array(
        "title" => __('Шапка', 'aletheme'),
        "priority" => 30,
    ));
    $wp_customize->add_setting('number-header_code', array(
        "default" => '',
        "transport" => "refresh"
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'number-header_code', array(
        'label' => __('Номер телефона', 'aletheme'),
        'section' => 'number-header',
        'settings' => 'number-header_code',
        'type' => 'input'
    )));
    //Текст логотипа
    $wp_customize->add_setting('text-logo-header_code', array(
        "default" => '',
        "transport" => "refresh"
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text-logo-header_code', array(
        'label' => __('Текст логотипа', 'aletheme'),
        'section' => 'number-header',
        'settings' => 'text-logo-header_code',
        'type' => 'input'
    )));
    //------------
    //Адрес
    $wp_customize->add_setting('adress-header_code', array(
        "default" => '',
        "transport" => "refresh"
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'adress-header_code', array(
        'label' => __('Адрес', 'aletheme'),
        'section' => 'number-header',
        'settings' => 'adress-header_code',
        'type' => 'textarea'
    )));
    //-------------------------------------------------------------
}


