<?php
    /*
    Template Name: Home page
    */
    ?><?php get_header();?>   <!--  Tells WordPress to include header.php --><section class="container-fluid barbarismbg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-sm-1">
                    <img class="barbarism_image" src="<?php the_field('barbarismimage');?>" alt="skeletal remains">
                </div>
                <div class="col-md-6 order-sm-12">
                <h2><?php the_field('barbarismtitle'); ?></h2><!--  custom field for the aboutme content-->
                <!-- <p> --><?php the_field('barbarismparagraph'); ?><!-- </p> -->

                    <a href="<?php the_field('exhibitlink'); ?>" class="btn exhibit btn-primary" href="#" role="button">Exhibit&#8594;</a>
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <section class="container-fluid reignbg ">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <h2><?php the_field('reigntitle'); ?></h2>
                    <!-- <p> --><?php the_field('reignparagraph'); ?><!-- </p> -->
                    <a href="<?php the_field('learnlink'); ?>" class="btn learn btn-primary" href="#" role="button">Learn more&#8594;</a>
                </div>
                <div class="col-md-6">
                    <img class="reignimage" src="<?php the_field('reignimage');?>" alt="replica of the ship">
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <section class="container-fluid reckoningbg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="reckoningimage" src="<?php the_field('reckoningimage');?>" alt="part of the batavia">
                </div> <!-- row -->
                <div class="col-md-6">
                    <h2><?php the_field('reckoningtitle'); ?></h2>
                    <!-- <p> --><?php the_field('reckoningparagraph'); ?><!-- </p> -->
                    <a href="<?php the_field('memberlink'); ?>" class="btn member btn-primary" href="#" role="button">Become a member&#8594;</a>
                </div>
            </div>
        </div> <!-- container -->

    </section><?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->