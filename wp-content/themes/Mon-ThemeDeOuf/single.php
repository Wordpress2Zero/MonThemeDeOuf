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
                <div class="sidebar">
                    <h3 class="sidebar-title">Search</h3>
                    <div class="sidebar-item search-form">
                        <form action="">
                            <input type="text">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div><!-- End sidebar search formn-->
                    
                    <h3 class="sidebar-title">Categories</h3>
                    <div class="sidebar-item categories">
                        <ul>
                            <li><a href="#">General <span>(25)</span></a></li>
                            <li><a href="#">Lifestyle <span>(12)</span></a></li>
                            <li><a href="#">Travel <span>(5)</span></a></li>
                            <li><a href="#">Design <span>(22)</span></a></li>
                            <li><a href="#">Creative <span>(8)</span></a></li>
                            <li><a href="#">Educaion <span>(14)</span></a></li>
                        </ul>
                    </div><!-- End sidebar categories-->
                    
                    <h3 class="sidebar-title">Recent Posts</h3>
                    <div class="sidebar-item recent-posts">
                    <div class="post-item clearfix">
                      <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                      <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>

                    <div class="post-item clearfix">
                      <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                      <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>

                    <div class="post-item clearfix">
                      <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                      <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>

                    <div class="post-item clearfix">
                      <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                      <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>

                    <div class="post-item clearfix">
                      <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                      <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>

                  </div><!-- End sidebar recent posts-->

                  <h3 class="sidebar-title">Tags</h3>
                  <div class="sidebar-item tags">
                    <ul>
                      <li><a href="#">App</a></li>
                      <li><a href="#">IT</a></li>
                      <li><a href="#">Business</a></li>
                      <li><a href="#">Mac</a></li>
                      <li><a href="#">Design</a></li>
                      <li><a href="#">Office</a></li>
                      <li><a href="#">Creative</a></li>
                      <li><a href="#">Studio</a></li>
                      <li><a href="#">Smart</a></li>
                      <li><a href="#">Tips</a></li>
                      <li><a href="#">Marketing</a></li>
                    </ul>
                  </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
    
<?php get_footer(); ?>
