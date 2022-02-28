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
    if( is_user_logged_in()) {
        $user_email = get_avatar( $current_user->user_email, 60 );
        $display_name = $current_user->display_name;
        $login = wp_register("<li>","</li>",false);
        $logout=  wp_loginout("",false);
        $ul = <<<EOF
            <ul>
                <h2>用户信息</h2>
                <div style="text-align: center;">$user_email $display_name</div>
                <p>尊敬的{$display_name}，欢迎您的再次登录，谢谢。</p>
                <li><a href="/wp-admin/profile.php" title="订阅">个人资料</a></li>
                $login
                $logout
            </ul>
EOF;
        return $ul;
    }
    else {
        $login = wp_register("<li>","</li>",false);
        $logout=  wp_loginout("",false);
        $ul = <<<EOF
            <ul>
                <h2>用户信息</h2>
                <p>您尚未登录，属于匿名访问，您可以注册或登录进入网站，成为网站的用户,留下您的足迹，谢谢。</p>
                <li><a href=\'/subscribe.html?action=subscribe\' title="订阅">订阅本站</a></li>
                $login
                $logout
            </ul>
EOF;
        return $ul;
    }
}

function qhjack_copyright_block_render_callback( $block_attributes, $content ) {
    $post_id = get_the_ID();
    $CopyrightType = get_field('CopyrightType',$post_id);
    if($CopyrightType == "Original") {
        $author = get_the_author();
        $title = get_the_title();
        $ul = <<<EOF
            <div id="secondary" class="post-copyright">
                <aside id="copyright" class=\'widget\'>
                    <h3 class="widget-title">©版权声明</h3>
                    <strong>
                        <p>本文章由$author撰写，采用<a href="https://creativecommons.org/licenses/by-nc-sa/3.0/cn/" title="著名-非商业使用-相同形式共享">BY-NC-SA</a>授权发布，转载请以链接形式标明<a href="" title="$title">本文地址</a>，非原创(转载)文章版权归作者所有。</p>
                    </strong>
                    <br />
                </aside>
            </div>
EOF;
        return $ul;
    }
    elseif($CopyrightType == "Reprint") {
        $ReprintURL = get_post_field('ReprintURL',$post_id);
        $ReprintTitle = get_post_field('ReprintTitle',$post_id);
        $ul = <<<EOF
            <div id="secondary" class="post-copyright">
                <aside id="copyright" class=\'widget\'>
                    <h3 class="widget-title">©版权声明</h3>
                    </strong>
                        <p>本文为转载文章，由『<a href="$ReprintURL" title="$ReprintTitle">$ReprintTitle</a>』原创发布，已获得转载许可。版权归原作者所有。</p>
                    </strong>
                    <br />
                </aside>
            </div>
EOF;
        return $ul;
    }
}

?>
