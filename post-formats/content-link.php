<?php while(have_posts()) : the_post() ?>
    <div class="row">
        <div class="col-xl-8">
            

            <?php 

            $thumbnail_url = get_the_post_thumbnail_url();

            echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
            the_post_thumbnail('large');
            echo '</a>';
            ?>
                

               <a href="<?php the_permalink(); ?>"><h2><?php the_title() ?></h2></a> 
                <p><?php the_excerpt(); ?></p>

               
        </div>
        <div class="col-xl-4">
            <h3><?php the_author(); ?></h3>
            <p><?php the_time(); ?></p>

            <span class="dashicons dashicons-admin-links"></span>
            
        </div>
        
    </div>
    <?php endwhile; ?>