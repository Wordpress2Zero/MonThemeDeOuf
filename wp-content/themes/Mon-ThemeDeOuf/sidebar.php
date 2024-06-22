<div class="sidebar">
    <h3 class="sidebar-title">Recherche</h3>
    
    <div class="sidebar-item search-form">
        <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="text" name="s" placeholder="Mots clés..." value="<?php echo get_search_query(); ?>">
            <button type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End sidebar search form -->

     
     <h3 class="sidebar-title">Categories</h3>
     <div class="sidebar-item categories">
         <ul>
         <?php 
         wp_list_categories(array(
             'show_count' => true,  // Afficher le nombre d'articles entre parenthèses
             'title_li' => '',      // Supprimer le titre par défaut de la liste
         ));
         ?>
         </ul>
     </div><!-- End sidebar categories-->
    
    <h3 class="sidebar-title">Articles récents</h3>
    
    <div class="sidebar-item recent-posts">
        <?php
        // La requête WP_Query pour récupérer les 5 derniers articles
        $args = array(
            'posts_per_page' => 5,
            'post_status' => 'publish'
        );
        $query = new WP_Query( $args );
        if ($query->have_posts()) :
        ?>  
        <div class="sidebar-item recent-posts">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="post-item clearfix">
                <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title_attribute(); ?>">
            <?php endif; ?>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('j M, Y'); ?></time>
        </div>
            <?php  endwhile;
            wp_reset_postdata();
           ?> 
            </div>
        <?php  endif; ?>
    </div>
    
    <h3 class="sidebar-title">Tags</h3>
    <div class="sidebar-item tags">
    <ul>
        <?php
        $tags = get_tags();
        if ($tags) {
            foreach ($tags as $tag) {
                echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
            }
        }
        ?>
    </ul>
    </div><!-- End sidebar tags -->

</div><!-- End sidebar -->

         