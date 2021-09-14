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
            <h3><?php the_author_posts_link(); ?></h3>
            <p><?php the_time(); ?></p>
            <p><?php the_tags(); ?></p>
            <p><?php the_category(); ?></p>

            <?php 
            $alpha_format = get_post_format();

            if($alpha_format == 'video'){
                echo '<span class="dashicons dashicons-format-video"></span>';
            }else if($alpha_format == 'image'){
                echo '<span class="dashicons dashicons-format-image"></span>';
            }else if($alpha_format == 'link'){
                echo '<span class="dashicons dashicons-format-links"></span>';
            }else if($alpha_format == 'audio'){
                echo '<span class="dashicons dashicons-format-audio"></span>';
            }
            ?>
            
        </div>
        
    </div>