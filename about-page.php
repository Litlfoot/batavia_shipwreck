<?php
    /*
    Template Name: About page
    */
    ?>
<?php require_once('about_header.php'); ?><div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <section class="maintext">              
            <?php 
$args = array(
  'category_name' =>  'About',
 // 'posts_per_page'    =>   1
);
// the query
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="about-posts">
    <h2 class="about-heading"><?php the_title('aboutheading'); ?></h2><?php
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('thumbnail');
                } ?>
<p class="about-text"><?php the_excerpt(); ?></p></div>
    <a class="readmore" href="<?php the_permalink(); ?>"> CONTINUE READING</a>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</section>
           
     </div>
    </div><!-- container  -->
  </div>  <!-- container fluid --><?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->