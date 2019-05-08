<?php get_header(); ?>
    
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- post -->
            <?php 
                require_once get_template_directory() . '/inc/page_sections/kinologi_section_1.php';  
                require_once get_template_directory() . '/inc/page_sections/kinologi_section_2.php';  
            ?>
        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?>

<?php get_footer(); ?>