<?php get_header(); ?>
				<main id="content" class="content col-12 col-md-8 col-lg-9">
          <?php while(have_posts()):the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="post">
							<div class="post-info">
								<p class="post-date"><?php the_date('Y.m.d'); ?></p>
								<p class="post-category"><a href=""><?php the_category(', '); ?></a></p>
								<p class="post-tag"><a href=""><?php the_tags(', '); ?></a></p>
							</div>
							<h1 class="h2 post-title"><?php the_title(); ?></h1>
							<div class="entry-content">
							  <?php the_content(); ?>
							</div>
						</div>
          </article>
          <?php endwhile;?>
				</main>

<?php get_sidebar(); ?>
<?php get_footer();
