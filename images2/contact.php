<?php /* Template Name: ContactPage */ 

get_header(); ?>


<!-- BLOG SNIPPET -->

<section class="blog-snippet">
    <h1>Contact</h1>
    <?php while(have_posts()) {
        the_post(); ?>
    <div class="blog-post">
            <div class="container">
                
                <?php the_content(); ?>
                
            </div>    
            
        </div>

    <?php }  ?>
    



            <hr>
            
            <?php 
        if ( comments_open() || get_comments_number() ) :
     comments_template();
 endif;
 ?>
</section>



<?php get_footer(); ?>