<?php
/**
 * The template for displaying archive pages
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
                <?php 
                    the_archive_title('<h1 class="article-title">', '</h1>');

                    if(have_posts()):
                        while(have_posts()): the_post();
                            get_template_part('template-parts/content', 'archive');
                        endwhile;
                        the_posts_pagination(array(
                            'prev_text' => 'Previous',
                            'next_text' => 'Next'
                        ));
                    else:
                ?>
                <p>Nothing to display.</p>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>