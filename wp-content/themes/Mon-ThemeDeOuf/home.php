<?php get_header(); ?>

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Blog</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Blog</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); 
                    // Récupérer la date de l'article au format par défaut de WordPress
                    $post_date = get_the_date();  ?>
                    <article class="entry">
                        <div class="entry-img">
                            <img src="<?php echo Get_article_img_url();?>" alt="" class="img-fluid">
                        </div>
                        <h2 class="entry-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> 
                                    <a href="blog-single.html">
                                        <?php // Récupérer le nom de l'auteur de l'article actuel
                                        echo Get_blog_auteur()?> 
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-clock"></i>
                                    <a href="blog-single.html">
                                        <time datetime="<?php echo $post_date ; ?>"><?php echo $post_date ; ?></time>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                            
                            <div class="read-more">
                                <a href="<?php echo get_permalink() ?>">Lire l'article</a>
                            </div>
                        </div>
                    </article><!-- End blog entry -->
                    <?php endwhile; ?>
                    
                    <?php the_posts_pagination(); ?>
                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>
                    
                    
                    <?php else : ?>
                    <p><?php _e('Sorry, no posts matched your criteria.', 'textdomain'); ?></p>
                    <?php endif; ?>  
                
                </div><!-- End blog entries list -->
                
               <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div><!-- End blog sidebar -->
                
            </div>
        </div>
    </section><!-- End Blog Section -->
</main><!-- End #main -->

<?php get_footer(); ?>
