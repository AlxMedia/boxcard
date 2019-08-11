<?php get_header(); ?>

<div class="content">
	
	<?php while ( have_posts() ): the_post(); ?>
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="blog-card group">
				
				<div class="blog-card-bottom">
					<ul class="entry-meta group">
						<li class="entry-author">
							<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar(get_the_author_meta('user_email'),'64'); ?></a>
						</li>
						<li class="entry-date"><i class="far fa-calendar"></i><?php the_time( get_option('date_format') ); ?></li>
						<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
							<li class="entry-comments"><i class="far fa-comment"></i><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></li>
						<?php endif; ?>
						<li class="entry-category"><?php the_category(' '); ?></li>
					</ul>
				</div>
				
				<div class="blog-card-inner">
					
					<div class="entry-media">
						<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
					</div>

				</div>

				<header class="entry-header group">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				
				<div class="entry-content">
					<div class="entry themeform">	
						<?php the_content(); ?>
						<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','boxcard'),'after'=>'</div>')); ?>
						<div class="clear"></div>				
					</div><!--/.entry-->
				</div>
				<div class="entry-footer group">
					
					<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','boxcard').'</span> ','','</p>'); ?>
					
					<div class="clear"></div>
					
					<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
						<div class="author-bio">
							<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
							<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
							<p class="bio-desc"><?php the_author_meta('description'); ?></p>
							<div class="clear"></div>
						</div>
					<?php endif; ?>
					
					<?php do_action( 'alx_ext_sharrre' ); ?>
					
					<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>
					
					<?php if ( get_theme_mod( 'post-nav', 'content' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>

					<?php if ( comments_open() || get_comments_number() ) :	comments_template( '/comments.php', true ); endif; ?>
					
				</div>
				
				
			</div>
		</article><!--/.post-->
		
	<?php endwhile; ?>
	
</div><!--/.content-->

<div id="move-sidebar-content"></div>

<?php get_footer(); ?>