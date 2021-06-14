<?php
/**
 * The footer of the theme
 *
 * Contains the closing of the body area and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */
?>
        <footer>
            <section class="footer-widgets">
                <div class="container">
                    <div class="row">
                        <?php if(is_active_sidebar('fancy-lab-footer-sidebar-1')): ?>
                            <div class="col-12 col-md-4">
                                <?php dynamic_sidebar('fancy-lab-footer-sidebar-1'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if(is_active_sidebar('fancy-lab-footer-sidebar-2')): ?>
                            <div class="col-12 col-md-4">
                                <?php dynamic_sidebar('fancy-lab-footer-sidebar-2'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if(is_active_sidebar('fancy-lab-footer-sidebar-3')): ?>
                            <div class="col-12 col-md-4">
                                <?php dynamic_sidebar('fancy-lab-footer-sidebar-3'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <section class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="copyright-text col-12 col-md-6">
                            <p>
                                <?php echo esc_html(get_theme_mod('set_copyright', __('Copyright X - All Rights Reserved', 'fancy-lab'))); ?>
                            </p>
                        </div>
                        <div class="footer-menu col-12 col-md-6 text-left text-md-right">
                            <?php 
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'fancy_lab_footer_menu'
                                    )
                                )
                            ?> 
                        </div>
                    </div>
                </div>
            </section>
        </footer>
    </div>
<?php wp_footer(); ?>
</body>
</html>