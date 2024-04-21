<?php 
/*
Template Name: 2024 page-accueil 
*/

get_header() 

?>

<div id="content">
       

       <div class="card" style="width: 18rem;">
           <img class="card-img-top" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-shadow.png" alt="Card image cap">
           <div class="card-body">
               <h5 class="card-title"><?php the_title(); ?></h5>
               <?php the_content() ; ?>
               <a href="#" class="btn btn-primary">Go somewhere</a>
           </div>
       </div>
</div>
    

<?php get_footer(); ?>