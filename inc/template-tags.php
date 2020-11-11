<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Nisarg
 */


if ( ! function_exists( 'home_pages_navigation' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function home_pages_navigation() {
	wp_link_pages(array(
		'before' => '<div class="page-links">'.esc_html__( 'Pages:', 'nisarg' ), 
		'after' => '', 
		'next_or_number' => 'next', 
		'previouspagelink' => __('PrevPage', 'nisarg' ), 
		'nextpagelink' => ""));
	wp_link_pages(array(
		'before' => '', 
		'after' => '', 
		'next_or_number' => 'number', 
		'link_before' =>'<span>', 
		'link_after'=>'</span>'
	));
	wp_link_pages(array(
		'before' => '',
		'after' => '</div>',
		'next_or_number' => 'next',
		'previouspagelink' => '',
		'nextpagelink' => __('NextPage', 'nisarg' )
	));
}
endif;

if ( ! function_exists( 'home_posts_navigation' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function home_posts_navigation() {
	// Don't print empty markup if there's only one page.
	global $wp_query;
	if ( $wp_query->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation posts-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Posts navigation', 'nisarg' ); ?></h2>
		<div class="nav-links">
		<?php
            if (isset($wp_query->query_vars['tpl'])) {
                $paged = (get_query_var('paged')) ? (int) get_query_var('paged') : 1;
                print('<div class="row">');
                if(get_previous_posts_link()) {
                    print('<div class="col-md-6 prev-post">');
                    $new_paged = $paged-1;
                    print('<a href="'.home_url(add_query_arg(array())).'&paged='.$new_paged.'"><i class="fa fa-angle-double-left"></i>上一页</a>');
                    print('</div>');
                } else {
                    echo '<div class="col-md-6">';
                    echo '<p> </p>';
                    echo '</div>';
                }
                            
                if(get_next_posts_link()) {
                    print('<div class="col-md-6 prev-post">');
                    $new_paged = $paged+1;
                    print('<a href="'.home_url(add_query_arg(array())).'&paged='.$new_paged.'">下一页<i class="fa fa-angle-double-right"></i></a>');
                    print('</div>');
                } else {
                    echo '<div class="col-md-6">';
                    echo '<p> </p>';
                    echo '</div>';
                }
            } else {
		?>
			<div class="row">
				<?php if ( get_previous_posts_link() ) { ?>	
				<div class="col-md-6 prev-post">		
				<?php previous_posts_link('<i class="fa fa-angle-double-left"></i>'.'上一页'); ?>
				</div>
				<?php }	else{
					echo '<div class="col-md-6">';
					echo '<p> </p>';
					echo '</div>';
				} ?>
				
				<?php if ( get_next_posts_link() ) { ?>
				<div class="col-md-6 prev-post">
				<?php next_posts_link('下一页'.'<i class="fa fa-angle-double-right"></i>' ); ?>
				</div>
				<?php } else {
					echo '<div class="col-md-6">';
					echo '<p> </p>';
					echo '</div>';
				} ?>
				</div>	
        <?php
            }
        ?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'home_post_navigation' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function home_post_navigation() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation" role="navigation">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'nisarg' ); ?></h2>
		<div class="nav-links">
			<div class="row">
			<!-- Get Previous Post -->
			
			<?php
				$prev_post = get_previous_post();
				if (!empty( $prev_post )){
			?>
				<div class="col-md-6 prev-post">
				<a class="" href="<?php echo esc_url(get_permalink( $prev_post->ID )); ?>"><span class="next-prev-text"><i class="fa fa-angle-left"></i><?php _e('PREVIOUS ','nisarg'); ?>
</span><br><?php if(get_the_title( $prev_post->ID ) != ''){echo get_the_title( $prev_post->ID );} else { _e('Previous Post','nisarg'); }?></a>
				</div>
			<?php } 
			 else { 
				echo '<div class="col-md-6">';
				echo '<p> </p>';
				echo '</div>';
			} ?>
			
			
			<!-- Get Next Post -->
			
			<?php
				$next_post = get_next_post();
				if ( is_a( $next_post , 'WP_Post' ) ) { 
			?>
			<div class="col-md-6 next-post">
			<a class="" href="<?php echo esc_url(get_permalink( $next_post->ID )); ?>"><span class="next-prev-text">
 <?php _e(' NEXT','nisarg'); ?><i class="fa fa-angle-right"></i></span><br><?php if(get_the_title( $next_post->ID ) != ''){echo get_the_title( $next_post->ID );} else {  _e('Next Post','nisarg'); }?></a>
			</div>
			<?php } 
			 else { 
				echo '<div class="col-md-6">';
				echo '<p> </p>';
				echo '</div>';
			} ?>
			
			</div>
		</div><!-- .nav-links -->
	</nav><!-- .navigation-->
	<?php
}
endif;

if ( ! function_exists( 'nisarg_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function nisarg_posted_on() {

$viewbyauthor_text = __( 'View all posts by', 'nisarg' ).' %s';

$entry_meta = <<<EOF
	<i class="fa fa-calendar-o">发布于</i>
	<a href="%1\$s" title="%2\$s" rel="bookmark">
		<time class="entry-date" datetime="%3\$s" pubdate>%4\$s </time>
	</a>
	<i class="fa fa-edit">最后编辑</i>
	<a href="%1\$s" title="%8\$s" rel="bookmark">
		<time class="entry-date" datetime="%9\$s" pubdate>%10\$s </time>
	</a>
	<span class="byline">
		<i class="fa fa-user">发布作者</i>
		<span class="author vcard">
			<a class="url fn n" href="%5\$s" title="%6\$s" rel="author">%7\$s</a>
		</span>
	</span>
EOF;

$entry_meta_copyright = <<<EOF
	<span class="byline">
		<i class="fa fa-user">原创作者</i>
		<span class="author vcard">
			<a class="url fn n" href="%1\$s" title="%2\$s" rel="author">%3\$s</a>
		</span>
	</span>
EOF;

	$entry_meta = sprintf($entry_meta,
		esc_url( get_permalink() ),
        esc_attr( get_the_time() ),
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() ),
        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
        esc_attr( sprintf( $viewbyauthor_text, get_the_author() ) ),
        esc_html( get_the_author() ),
		esc_attr( get_the_modified_time() ),
		esc_attr( get_the_modified_date('c') ),
		esc_attr( get_the_modified_date() )
    );

    print $entry_meta;
    
    $post_id = get_the_ID();	
    $custom_fields = get_post_custom_keys($post_id);
    if(in_array('CopyrightType',$custom_fields)) {
        $custom = get_post_custom($post_id);
        $CopyrightType = $custom['CopyrightType'][0];
        if($CopyrightType == "Reprint") {
            $custom = get_post_custom($post_id);
            $DisplayAuthor = $custom['DisplayAuthor'][0];
            if($DisplayAuthor) {
                $Author = $custom['Author'][0];
                if ($Author != '') {
                    $entry_meta_copyright = sprintf($entry_meta_copyright,
                        esc_url('index.php?tpl=reprint_author&amp;original_author='.$Author),
                        esc_attr( sprintf( $viewbyauthor_text, $Author ) ),
                        $Author
                    );
                    print $entry_meta_copyright;
                }
            }
        }
    }

	if(comments_open()){	
		printf(' <i class="fa fa-comments-o"></i><span class="screen-reader-text">%1$s </span> ',_x( 'Comments', 'Used before post author name.', 'nisarg' ));
		comments_popup_link( __('0 Comment','nisarg'), __('1 comment','nisarg'), '% 条评论', 'comments-link', '');
	}
	
	$postID = get_the_ID();
	$thumbsUpCount = getThumbsUpCount($postID);
	$viewsCount = getPostViews($postID);
	echo '<span class="fa fa-eye page-views">'.$viewsCount.' 已阅读</span>';
	echo '<span class="fa fa-thumbs-o-up thumbs-up" data-post-id="'.$postID.'">'.$thumbsUpCount.' 点赞</span>';
	echo edit_post_link( esc_html__( 'Edit', 'nisarg' ), '<span style="text-decoration: underline; padding-left: 0.2em;">', '</span>' );
}
endif;


if ( ! function_exists( 'nisarg_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function nisarg_entry_footer() {

 	if(!is_home() && !is_search() && !is_archive()){
			
			if ( 'post' == get_post_type() ) {

				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( esc_html__( ', ', 'nisarg' ) );
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', esc_html__( ', ', 'nisarg' ) );

				if ( $categories_list || $tags_list  ) {
					echo '<hr>';
					echo '<div class="row">';
				}
				
				if ( $categories_list ) {
					/* translators: 1: list of categories. */
					printf( '<div class="col-md-6 cattegories"><span class="cat-links"><i class="fa fa-folder-open"></i>
		 ' . esc_html( '%1$s') . '</span></div>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				}

				
				
				if ( $tags_list ) {
					/* translators: 1: list of tags. */
					printf( '<div class="col-md-6 tags"><span class="tags-links"><i class="fa fa-tags"></i>' . esc_html( ' %1$s' ) . '</span></div>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				}
				if ( $categories_list || $tags_list  ) {
					echo '</div>';
				}
			}
	}
	
	edit_post_link( esc_html__( 'Edit This Post', 'nisarg' ), '<br><span>', '</span>' );
		
}
endif;
?>
