<?php
/**
 * The template for displaying search result pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */

get_header(); ?>

<div class="content-area">
    <main>
        <div class="container">
            <div class="container">
                <h1><?php _e('Search results for', 'fancy-lab'); ?>: <?php echo get_search_query(); ?></h1>
                <?php 
                    get_search_form();
                    if(have_posts()):
                        while(have_posts()): the_post();
                            get_template_part('template-parts/content', 'search');
                        endwhile;
                        the_posts_pagination(array(
                            'prev_text' => __('Previous', 'fancy-lab'),
                            'next_text' => __('Next', 'fancy-lab')
                        ));
                    else:
                ?>
                <p><?php _e('There are no results for your query', 'fancy-lab'); ?>.</p>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>