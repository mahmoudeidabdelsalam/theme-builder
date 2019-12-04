<?php 
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('sage/search.js', get_theme_file_uri().'/framework/assets/search.js', ['jquery'], null, true);

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_localize_script( 'sage/main.js', 'sage', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    
}, 100);