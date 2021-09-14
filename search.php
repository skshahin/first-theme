<?php get_header(); ?>
<body <?php body_class(); ?>>
    <div class="container">
        <div class="title header">
            <h2>Index Page</h2>
        </div>
        <div class="">
        <?php
if(is_search()){
    ?>
    <h3>Search for: <?php the_search_query(); ?></h3>
    <?php
}

?>
        </div>
        <div class="row  mt-5 mb-5">
        <div class="search ">
            <?php get_search_form() ?>
        </div>
        </div>

<?php
if(! have_posts() && is_search()){
    ?>
    <div class="search_result">
        <h3><?php _e('search Result Not found','alpha') ?></h3>
    </div>
    <?php
}

?>



<div class="">
       <?php while(have_posts() ) {  the_post();
         get_template_part("post-formats/content");
     } ?>
       </div>

        <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>

    </div>


<?php get_footer() ?>