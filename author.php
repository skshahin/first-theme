<?php get_header(); ?>
<body <?php body_class(); ?>>
    <div class="container">
        <div class="container">
        <div class="author_meta">
                    <div class="row">
                        <div class="col-xl-2">
                            <?php echo get_avatar(get_the_author_meta('id')) ?>
                        </div>
                        <div class="col-xl-10">
                            <h2>
                                <?php
                                $author_id = get_post_field ('post_author');
                                $display_name = get_the_author_meta( 'display_name' , $author_id );
                                echo $display_name;
                                ?>
                            </h2>
                            <p>
                            <?php
                                $author_id = get_post_field ('post_author');
                                $display_name = get_the_author_meta( 'description' , $author_id );
                                echo $display_name;
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
        </div>
        <?php while(have_posts() ) {  the_post(); ?>
         
            <div class="row">
        <div class="col-xl-12">
            


           <a href="<?php the_permalink(); ?>"><h2><?php the_title() ?></h2></a> 
          <p><?php the_excerpt(); ?></p>

               
        
    </div>

         <?php
     } ?>

<?php the_posts_pagination(); ?>

<!-- bootstrap cdn -->

<?php get_footer() ?>