<?php 
get_header();

// Récupérer la date de l'article au format par défaut de WordPress
$post_date = get_the_date();

// Récupérer la liste des catégories de l'article actuel
$category_list = get_the_category_list(', ');

// Récupérer la liste des tags de l'article actuel
$tag_list = get_the_tag_list('', ', ');
?>

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
            <div class="col-lg-8 entries">
                <article class="entry entry-single">
                    <div class="entry-img">
                        <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                    </div>
                    
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    
                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-person"></i>
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
                        <?php the_content();?>
                    </div>
                    
                    <div class="entry-footer">
                        <?php // Vérifier si des catégories existent
                        if ($category_list) {
                            // Afficher la liste des catégories
                            echo '  <i class="bi bi-folder"></i> <ul class="cats">' . $category_list . '</ul>';
                        }
                        // Vérifier si des tags existent
                        if ($tag_list) {
                            // Afficher la liste des tags
                            echo ' <i class="bi bi-tags"></i> <ul class="tags">' . $tag_list . '</ul>';
                        }
                        ?>
                    </div>
                
                </article>
                <!-- End blog entry -->
                
                
                <!-- <div class="blog-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
              <div>
                <h4>Jane Smith</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div><!-- End blog author bio -->
            
            </div><!-- End blog entries list -->
            
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
    
<?php get_footer(); ?>
