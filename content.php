<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-card group">
		
		<div class="blog-card-inner" style="background-image:url('<?php the_post_thumbnail_url('boxcard-large'); ?>');">
		
			<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
			<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
			<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>
			
			<div class="blog-card-inner-inner">
			
				<header class="entry-header group">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</header>
				
				<div class="entry-content">
					<div class="entry themeform">
						<?php if (get_theme_mod('excerpt-length','26') != '0'): ?>
							<?php the_excerpt(); ?>
							<a class="more-link" href="<?php the_permalink(); ?>"><?php esc_html_e('Continue reading...','boxcard'); ?></a>
						<?php endif; ?>
					</div>
				</div>
			
			</div>
		</div>
		
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
		
	</div>
</article><!--/.post-->	