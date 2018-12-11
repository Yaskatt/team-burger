<?php get_header(); ?>
				<main id="content" class="content col-12 col-md-8 col-lg-9">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="post">
							<div class="post-info">
								<p class="post-date">2018.12.04</p>
								<p class="post-category"><a href="">カテゴリ名</a></p>
								<p class="post-tag"><a href="">タグ名</a></p>
							</div>
							<h2 class="post-title"><?php the_title(); ?></h2>
              <p class="eyecatch"><?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              }
              ?></p>
							<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
							<h3>見出し大見出し大見出し大見出し大見出し大見出し大見出し</h3>
							<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
							<h4>見出し中見出し中見出し中見出し中見出し中見出し中見出し中</h4>
							<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</article>
				</main>

<?php get_sidebar(); ?>
<?php get_footer();
