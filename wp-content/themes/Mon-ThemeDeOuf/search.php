<?php
get_header(); ?>


<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog Single</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li>Blog Single</li>
          </ol>
        </div>
    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row">
        
           <div class="col-md-8">
            <?php if ( have_posts() ) : ?>
                <h2><?php printf( __( 'Search Results for: %s', 'textdomain' ), get_search_query() ); ?></h2>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="search-result-item">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                <?php endwhile; ?>
                <div class="pagination">
                    <?php the_posts_pagination(); ?>
                </div>
            <?php else : ?>
                <h2><?php _e( 'No results found', 'textdomain' ); ?></h2>
                <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'textdomain' ); ?></p>
                <?php get_search_form(); ?>
            <?php endif; ?>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
        
        </div>

      </div>
    </section><!-- End Blog Single Section -->



<?php
get_footer();
?>
