<?php
    /*
    Template Name: Signup page
    */
    ?>
<?php require_once('signup_header.php'); ?>
<section class="container-fluid signupintro ">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <h2><?php the_field('membershipintro'); ?></h2>
                    <p><?php the_field('membershipparagraph'); ?></p>
                    <a href="<?php the_field('learnlink'); ?>"class="btn learn btn-primary" href="#" role="button">Learn more&#8594;</a>
                </div>
                <div class="col-md-6">
                    <img class="membershipimage" src="<?php the_field('membershipimage');?>" alt="two boys reading description">
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

<?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->