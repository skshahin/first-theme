<?php get_header(); ?>
<body <?php body_class(); ?>>
    <div class="container">
        <div class="title header">
            <h2>Index Page</h2>
        </div>
        
        <div class="row  mt-5 mb-5">
        <div class="search ">
            <?php get_search_form() ?>
        </div>
        </div>
       <div class="row">
           <div class="col-xl-12">
           <div class="testimonial">
            <?php 
            $attachments = new Attachments('testimonial');
            if($attachments->exist()) {
                while($attachment = $attachments->get()) { ?>

                    <div>
                        <?php echo $attachments->image('thumbnails'); ?>
                       <h4> <?php echo $attachments->field('name'); ?> </h4>
                    </div>
                <?php
                }
            }

            ?>
        </div>
           </div>
       </div>
       <div class="">
       <?php while(have_posts() ) {  the_post();
         get_template_part("post-formats/content");
     } ?>
       </div>

        <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>

    </div>
<!-- bootstrap cdn -->

<?php get_footer() ?>

