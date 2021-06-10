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
                <h1>Search results for: <?php echo get_search_query(); ?></h1>
                <?php 
                    get_search_form();
                    if(have_posts()):
                        while(have_posts()): the_post();
                            get_template_part('template-parts/content', 'search');
                        endwhile;
                        the_posts_pagination(array(
                            'prev_text' => 'Previous',
                            'next_text' => 'Next'
                        ));
                    else:
                ?>
                <p>There are no results for your query.</p>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>