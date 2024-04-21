<?php get_header() ?>

<div id="content">
    
    <h2>Blog</h2>
    
    <?php if (have_posts()) : ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.', 'textdomain'); ?></p>
    <?php endif; ?>
    
</div>

<?php get_footer(); ?>
