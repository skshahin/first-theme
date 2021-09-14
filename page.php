<div class="title header text-center">
            <h1>Index Page</h1>
        </div>
<?php get_header(); ?>
<body <?php body_class(); ?>>
    <div class="container">
        
    <div class="row">
        <div class="col-xl-8">
            <div class="hero_section">
                <h1><?php the_title() ?></h1>
                <div class="img-100"><img src="<?php the_post_thumbnail();?>"></div>
                <p><?php the_excerpt(); ?></p>
            </div>
        </div>

        <div class="col-xl-4">
            <h3><?php the_author(); ?></h3>
            <p><?php the_time(); ?></p>
            
        </div>
     </div>
    </div>



<!-- bootstrap cdn -->

<?php get_footer() ?>