<?php get_header() ?>
<main id="content" class="content col-12 col-md-8 col-lg-9">	
<?php if(have_posts()): while(have_posts()): the_post(); ?> 
                    <div class="blog-card">
                        <article>
                            <div class="blog-header">
                                <h3>
                                <?php the_title(); ?>
                                </h3>
                                <p><time datetime="2018.12.04"><?php the_date( 'Y-m-d' ); ?></time></p>
                            </div>
                            <div class="blog-thumbnail">
                            <?php if( has_post_thumbnail() ): ?>
                            <?php the_post_thumbnail('medium'); ?>
                            <?php else: ?>    
                            <img src="images/photo1.jpg" alt="画像" width="300" hright="100">
                            <?php endif; ?>    
                            </div>
                            <p>
                            <?php the_content(); ?>
                            <?php the_excerpt(); ?>
                            </p>
                            <p><a href="#">続きを読む</a></p>
                            <div class="blog-footer">
                                <p>
                                カテゴリー：
                                <?php the_category(); ?>
                                    <a href="#"></a>
                                </p>
                            </div>
                        </article>
                    </div>
<?php endwhile; ?>
<?php else: ?>
 表示できる記事がありません。
<?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>