<?php

$enable_copyright = manaslu_get_option('enable_copyright');
$enable_footer_nav = manaslu_get_option('enable_footer_nav');
$enable_footer_social_nav = manaslu_get_option('enable_footer_social_nav');
$enable_footer_credit = manaslu_get_option('enable_footer_credit');

if($enable_copyright || $enable_footer_credit || $enable_footer_nav || $enable_footer_social_nav):
    ?>

    <?php if ($enable_footer_social_nav && has_nav_menu('social-menu')): ?>
    <div class="theme-footer-middle">
        <div class="site-footer-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'social-menu',
                'container_class' => 'footer-social-navigation',
                'fallback_cb' => false,
                'depth' => 1,
                'menu_class' => 'theme-social-navigation theme-menu theme-footer-navigation',
                'link_before' => '<span class="social-profile-label">',
                'link_after' => '</span>',
            ));
            ?>
        </div>
    </div>
<?php endif; ?>

    <div class="theme-footer-bottom">

        <?php if($enable_copyright || $enable_footer_credit ):?>

            <div class="theme-author-credit">

                <?php if($enable_copyright):?>
                    <div class="theme-copyright-info">
                        <?php
                        $copyright_text = manaslu_get_option('copyright_text');
                        if($copyright_text):
                            echo wp_kses_post($copyright_text); 
                        endif;
                        $copyright_date_format = manaslu_get_option( 'copyright_date_format', 'Y' );
                        if($copyright_date_format){
                            echo ' '.date_i18n( $copyright_date_format, current_time( 'timestamp' ) );
                        }
                        ?>
                    </div><!-- .theme-copyright-info -->
                <?php endif; ?>

                <?php if($enable_footer_credit): ?>
                    <div class="theme-credit-info">
                        <?php printf(esc_html__('Designed & Developed by %1$s', 'manaslu'), '<a href="https://themeinwp.com/" target = "_blank" rel="designer">ThemeinWP Team</a>'); ?>
                    </div>
                <?php endif; ?><!-- .theme-credit-info -->

            </div><!-- .theme-author-credit-->
            
        <?php endif;?>

        <?php if ($enable_footer_nav && has_nav_menu('social-menu')): ?>
            <div class="site-footer-menu">
                <?php 
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container_class' => 'footer-navigation',
                    'fallback_cb' => false,
                    'depth' => 1,
                    'menu_class' => 'theme-footer-navigation theme-menu theme-footer-navigation'
                ) );
                ?>
            </div>
        <?php endif; ?>

    </div><!-- .theme-footer-bottom-->

    <?php 
endif;