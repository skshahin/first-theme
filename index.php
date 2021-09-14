<?php get_header(); ?>
<body <?php body_class(); ?>>
    <div class="container img-100">
        <div class="title header">
            <h2>Index Page</h2>
        </div>
       
        <?php while(have_posts() ) {  the_post();
         get_template_part("post-formats/content");
     } ?>

<div class="pagination">
        <?php the_posts_pagination(); ?>
    </div>


<!-- bootstrap cdn -->

<?php get_footer() ?>