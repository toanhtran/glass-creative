<?php 
/* Main Template File */
        get_header();
?>



<div class="main-content-width-wrapper">
        <div class="two-column-entry">
            <h1><?php echo get_the_title() ?></h1>
        
            <main class="main-content">
               
               <?php 
    // Start the loop if we have post if we do have post past a post object 
                if (have_posts()) :
                    while(have_post()) :
                            the_post();
                                the_content();
                        endwhile;
                endif;
                    
                ?>
                
            </main>
        </div>
    </div>
    
   <?php get_footer(); ?>