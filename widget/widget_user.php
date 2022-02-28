<?php

/**
 * Plugin Name: Gutenberg examples dynamic
 */

function qhjack_user_block_render_callback( $block_attributes, $content ) {
    global $current_user, $display_name , $user_email;
    wp_get_current_user();
    extract($args);
    echo $before_widget;
    if ( $title ) {
        echo $before_title . $title . $after_title;
    }
?>
    <ul>
        <h2>用户信息</h2>
        <?php if( is_user_logged_in()): ?>
            <div style="text-align: center;">
                <?php echo get_avatar( $current_user->user_email, 60 ); ?>
                <?php echo $current_user->display_name; ?>
            </div>
            <p>
                尊敬的<?php echo $current_user->display_name; ?>，欢迎您的再次登录，谢谢。
            </p>
            <li><a href='/wp-admin/profile.php' title="订阅">个人资料</a></li>
        <?php else: ?>
            <p>
                您尚未登录，属于匿名访问，您可以注册或登录进入网站，成为网站的用户,留下您的足迹，谢谢。
            </p>
            <li><a href='/subscribe.html?action=subscribe' title="订阅">订阅本站</a></li>
        <?php endif; ?>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
    </ul>
<?php
}

?>
