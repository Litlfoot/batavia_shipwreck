<?php
    /*
    Template Name: Signup page
    */
    ?>
<?php require_once('signup_header.php'); ?>
<section class="container-fluid signupintro">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <h2><?php the_field('membershipintro'); ?></h2>
                    <p><?php the_field('membershipparagraph'); ?></p>
                </div>
                <div class="col-md-6">
                    <img class="membershipimage" src="<?php the_field('membershipimage');?>" alt="two boys reading description">
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <section class="container-fluid signupheading">
        <div class="container">
 <div class="row">
                <div class="col-md-12">
                    <h2><?php the_field('membershipheading'); ?></h2>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <section class="container-fluid membershiptabs">
        <div class="container">
 <div class="row">
                <div class="col-md-4">
                <h2 class="followertab"><?php the_field('followertab'); ?></h2></div><div class="col-md-4">
                <h2><?php the_field('fantab'); ?></h2></div><div class="col-md-4">
                <h2><?php the_field('friendtab'); ?></h2></div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <section class="container-fluid plansdescription">
        <div class="container">
 <div class="row">
                <div class="col-md-4">
                    <h2><?php the_field('followerheading'); ?></h2><p><?php the_field('followerinfo'); ?></p><a href="<?php the_field('followerlink'); ?>"class="btn learn btn-primary" href="#" role="button">Follower</a>
                </div><div class="col-md-4">
                    <h2><?php the_field('fanheading'); ?></h2><p><?php the_field('faninfo'); ?></p><a href="<?php the_field('fanlink'); ?>"class="btn learn btn-primary" href="#" role="button">Fan</a>
                </div><div class="col-md-4">
                    <h2><?php the_field('friendheading'); ?></h2><p><?php the_field('friendinfo'); ?></p><a href="<?php the_field('friendlink'); ?>"class="btn learn btn-primary" href="#" role="button">Friend</a>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <section class="container-fluid payandcond">
        <div class="container">
 <div class="row">
                <div class="col-md-4">
                <img class="verisignlogo" src="<?php the_field('verisignimage');?>" alt="verisignlogo"></div>
                <div class="col-md-4">
                <img class="paymentlogo" src="<?php the_field('paymentimage');?>" alt="visa and mastercard logo "><p><?php the_field('securepayment'); ?></p></div><div class="col-md-4"><a href="<?php the_field('termsandconditions'); ?>"class="btn learn btn-primary" href="#" role="button">Terms and Conditions</a>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

<?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->