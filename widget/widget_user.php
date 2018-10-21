<?php
    class WP_Widget_User_Meta extends WP_Widget {
 
    	function __construct() {
			$widget_ops = array('classname' => 'widget_meta', 'description' => __( "Log in/out, admin,user") );
        	parent::__construct('meta', __('User'), $widget_ops);
   		}
 
    	function widget( $args, $instance ) {
			global $current_user, $display_name , $user_email;
			get_currentuserinfo();
			extract($args);
        	$title = apply_filters('widget_title', empty($instance['title']) ? __('User') : $instance['title'], $instance, $this->id_base);
        	echo $before_widget;
			if ( $title ) {
				echo $before_title . $title . $after_title;
			}
?>
			<ul>
				<?php if( is_user_logged_in()): ?>
				<div style="text-align: center;">
					<?php echo get_avatar( $current_user->user_email, 60 ); ?>
					<?php echo $current_user->display_name; ?>
				</div>
				<p>
					尊敬的<?php echo $current_user->display_name; ?>，欢迎您的再次登录，谢谢。
				</p>
				<?php else: ?>
				<p>
					您尚未登录，属于匿名访问，您可以注册或登录进入网站，成为网站的用户,留下您的足迹，谢谢。
				</p>
				<?php endif; ?>
            	<?php wp_register(); ?>
            	<li><?php wp_loginout(); ?></li>
            	<?php wp_meta(); ?>
        	</ul>
<?php
			echo $after_widget;
    	}
 
    	function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
        	$instance['title'] = strip_tags($new_instance['title']);
        	return $instance;
    	}
 
    	function form( $instance ) {
			$instance = wp_parse_args( (array) $instance, array( 'title' => ''));
			$title = strip_tags($instance['title']);
?>
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
			</p>
<?php
   		}
	}
?>
