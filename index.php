<?php get_header(); ?>
    
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- post -->
            <?php 
                the_title();
                the_content();
                $slogan = esc_attr( get_option('slogan'));
                $defoult ="defoult slogan";
                if($slogan == null){
                    $slogan = $defoult;
                }
                 echo "<h2>".$slogan."</h2>";
            ?>
            
            <?php 
                $f_GallImg_1 = esc_attr(get_option('f_gall_img_1'));
                echo '<img src="'.$f_GallImg_1.'"/>';
             ?>

            <hr>
        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?>

<?php get_footer(); ?>