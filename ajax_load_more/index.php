<div class="entry-content">
    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => '2',
        'paged' => 1,
    );
    $blog_posts = new WP_Query( $args );
    ?>
 
    <?php if ( $blog_posts->have_posts() ) : ?>
        <div class="blog-posts">
            <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
            <?php endwhile; ?>
        </div>
        <div class="loadmore">Load More...</div>
    <?php endif; ?>
</div>
