<?php get_header(); ?>
<body <?php body_class(); ?>>
    <div class="container">
        <div class="title header">
            <h2 class="text-center"> under <?php single_cat_title(); ?></h2>
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