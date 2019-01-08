<footer id="footer" class="footer">
    <div class="footer_subscription">
       <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="footer_subscription_text"><?php echo get_theme_mod('subscription_text') ?></p>
                </div>
                <div class="col-md-6">
                    <div class="footer_subscription_form">
                        <?php echo do_shortcode( '[contact-form-7 id="90" title="Form from footer /ru/"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer_nav_wrapper">
                    <h4 class="footer_nav_title"><?php echo get_theme_mod('bandsclub_tm_title') ?></h4>
                    <?php bandsclub_tm_footer(); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer_nav_wrapper">
                    <h4 class="footer_nav_title"><?php echo get_theme_mod('support_title') ?></h4>
                    <?php support_footer(); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer_nav_wrapper">
                    <h4 class="footer_nav_title"><?php echo get_theme_mod('partnership_title') ?></h4>
                    <?php partnership_footer(); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="social_footer_wrapper">
                <li><a href="#"><img src="<?php bloginfo('template_url') ?>/src/img/icons/instagram.svg" alt="Instagram"></a></li>
                <li><a href="#"><img src="<?php bloginfo('template_url') ?>/src/img/icons/facebook.svg" alt="Instagram"></a></li>
                <li><a href="#"><img src="<?php bloginfo('template_url') ?>/src/img/icons/youtube.svg" alt="Instagram"></a></li>
            </ul>
        </div>
    </div>

</footer>

</body>
<?php wp_footer(); ?>
</html>