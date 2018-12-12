<?php get_header(); ?>
				<main id="content" class="content col-12 col-md-8 col-lg-9">
					<article class="error-404 not-found">
						<div class="post">
							<h1 class="h2 post-title">Error 404 - Not Found. </h1>
							<div class="entry-content">
                <h2>指定されたページは見つかりませんでした。</h2>
                <p>現在表示する記事がありません。</p>
                <p><a href="<?php echo home_url(); ?>">トップページへ戻る</a></p>
                <p>他のキーワードで検索する</p>
                <?php get_search_form(); ?>
							</div>
						</div>
          </article>
				</main>

<?php get_sidebar(); ?>
<?php get_footer();
