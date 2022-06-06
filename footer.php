<footer class="container-fluid">
        <!-- div for the main image to stretch s to the edge of the page-->
        <div class="container">
            <!-- div to hold the content in the middle of the page-->
            <div class="row">
                <!-- a row that gives us access to the BS columns-->
                <div class="col-md-4 footercontact"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left') ) : 
endif; ?><!-- <h3>Contact</h3>
                    <p>Email: reception@museum.wa.gov</p>
                    <p>Phone: 1300 134 081</p>
                    <h3>Follow us</h3>
                    <img src="http://206.189.45.97/~mesh17/wp-content/themes/batavia_shipwreck/images/bestinsta_1.jpg" alt="instagram icon">
                    <img src="http://206.189.45.97/~mesh17/wp-content/themes/batavia_shipwreck/images/twitter.jpg" alt="twitter icon">
                    <img src="http://206.189.45.97/~mesh17/wp-content/themes/batavia_shipwreck/images/facebook_icon.jpg" alt="facebook icon">
                    <img src="http://206.189.45.97/~mesh17/wp-content/themes/batavia_shipwreck/images/yout.jpg" alt="youtube icon">
                --> <!-- </div> This is the extra div - because wordpress hides the other -->
                <div class="col-md-4 footeroptions"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-centred') ) : 
endif; ?><!-- <p><span class="westernaustralianmuseum">Western Australian Museum</span></p>
                    <p>Membership</p>
                    <p>Donate</p>
                    <p>About</p>
                 --></div><!-- row -->
                <div class="col-md-4 footerlocation"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right') ) : 
endif; ?><!--  <h3>Location & Hours</h3>
                    <ul class="list-inline justify-content-center">
                        <li class="list-item">47 Cliff Street</li>
                        <li class="list-item">Fremantle, WA</li>
                        <li class="list-item">6160</li>
                        <li class="list-item">Open Daily:</li>
                        <li class="list-item">0930Am to 0500Pm</li>
                    </ul> -->
</div>
                </div> <!-- row -->
            </div></footer><?php wp_footer(); ?></body></html>