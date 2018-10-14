<?php get_header(); ?>
<div class="container bl-content">
    <?php
//        Вывод контента
        $post = get_post(null, 'OBJECT', '');
        $my = do_shortcode($post->post_content);
        echo $my;
    ?>
</div>

<?php get_footer(); ?>
