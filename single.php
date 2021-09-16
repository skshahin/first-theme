<?php get_header(); ?>
<body <?php body_class(); ?>>
    <div class="container">

    <?php
        $alpha_layout_style = 'col-xl-8';
        $text_align = '';
        if(!is_active_sidebar('main-sidebar')){
         $alpha_layout_style = 'col-xl-12';
         $text_align = 'text-center';
        }

    ?>

        <div class="title">
            <h1 class="<?php echo $text_align ?>">Index Page</h1>
        </div>
       
    <div class="row">

        <div class="<?php echo $alpha_layout_style ?>">        

            <?php 

            $thumbnail_url = get_the_post_thumbnail_url();

            echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
            the_post_thumbnail('large');
            echo '</a>';
            ?>
                

               <a href=""><h2><?php the_title() ?></h2></a> 
                <p><?php the_content(); ?></p>


                <!-- ACF all function
            ===================================== -->

    <?php
     if(get_post_format() == 'image' && class_exists('the_field') ) :  ?>
               
                     
                <?php if(get_field('camera-model')): ?>
                <strong>Model : </strong><?php the_field('camera-model') ?> <br>
                <?php endif; ?>
                <?php if(get_field('location')): ?>
                <strong>Location : </strong><?php the_field('location') ?> <br>
                <?php endif; ?>
                <?php if(get_field('time')): ?>
                <strong>Time : </strong><?php the_field('time') ?> <br>
                <?php endif; ?>

                

                <?php
                    if(get_field('licensed')):
                ?>
                <strong>License : </strong> <?php the_field('license') ?> 
                <?php endif; ?><br>

                

                <?php
                    $alpha_image = get_field('image_size');
                    $alpha_image_details = wp_get_attachment_image_src($alpha_image,'medium');
                    echo "<img src='".esc_url($alpha_image_details[0])."'/>";
                ?>
                <br>
                <?php
               if(function_exists("the_field")){
                $file = get_field('attachment');
                if($file){
                    $file_url = wp_get_attachment_url($file);
                    $file_thum = get_field('thumbnails',$file);
                    if($file_thum){
                    $file_thum_details = wp_get_attachment_image_src($file_thum,'medium');
                    echo "<a href='{$file_url}'><img src='".esc_url($file_thum_details[0])."'/></a>" ;
                    }else{
                        echo "<a href='{$file_url}'>{$file_url}</a>" ;
                    }
                }
               }
                ?>
                <br>

            <?php
                if(function_exists('the_field')): ?>
            <div>
               <?php
                     $Related_posts = get_field('Related_posts');
                     $alpha_Query = new WP_Query( array (
                         'post__in' => $Related_posts,
                         'orderby' => 'post__in'
                     ));
                    while($alpha_Query->have_posts() ) { $alpha_Query->the_post(); ?>
                        <h4>
                            <?php the_title(); ?>
                        </h4>
                    <?php
                    }
                    wp_reset_query();
               ?>
            </div>

            <?php endif; ?>
            

    <?php endif; ?>

                    <!-- ACF all function
            ===================================== -->

            <!-- Cmb2 all function
            ===================================== -->

            <?php
     if(get_post_format() == 'image' && class_exists('CMB2') ) :  ?>
               
               <?php
                $alpha_camera_model = get_post_meta(get_the_ID(),'_alpha_camera',true);
                $alpha_camera_location = get_post_meta(get_the_id(),'_alpha_location',true);
                $alpha_time = get_post_meta(get_the_id(),'_alpha_time',true);
                $alpha_license = get_post_meta(get_the_id(),'_alpha_license_',true);
                $alpha_license_information = get_post_meta(get_the_id(),'_alpha_licensed',true);

                ?>
                     
                <?php if($alpha_camera_model): ?>
                <strong>Model : </strong><?php echo esc_html($alpha_camera_model) ?> <br>
                <?php endif; ?>
                <?php if($alpha_camera_location): ?>
                <strong>Location : </strong><?php echo esc_html($alpha_camera_location) ?> <br>
                <?php endif; ?>
                <?php if( $alpha_time): ?>
                <strong>Time : </strong><?php echo esc_html($alpha_time) ?> <br>
                <?php endif; ?>

                

                <?php
                    if($alpha_license):
                ?>
                <strong>License : </strong> <?php echo esc_html($alpha_license_information); ?> 
                <?php endif; ?><br>

               <p>
               <?php
                    $alpha_image = get_post_meta(get_the_id(),'_alpha_image_field_id',true);
                    $alpha_image_details = wp_get_attachment_image_src($alpha_image,'medium');
                    echo "<img src='".esc_url($alpha_image_details[0])."'/>";
                ?>
               </p>
                <br>

                <p>
                <?php
                    $alpha_file = get_post_meta(get_the_id(),'_alpha_resume',true);
                    echo esc_url($alpha_file);
                ?>
                </p>

    <?php endif; ?>




             <!-- Cmb2 all function
            ===================================== -->



                <div class="author_meta">
                    <div class="row">
                        <div class="col-xl-2">
                            <?php
                            $avatar_id =  get_post_field ('post_author');
                            echo get_avatar($avatar_id) ?>
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

                            <?php
                            if(function_exists("the_field")):
                            ?>
                            <p>
                               <strong> Facebook :</strong> <?php the_field('Facebook','user_'.get_post_field('post_author')) ?> <br>
                               <strong> twitter :</strong> <?php the_field('twitter','user_'.get_post_field('post_author')) ?>
                            </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
        </div>
        <?php if(is_active_sidebar('main-sidebar')): ?>
        <div class="col-xl-3">
            <?php 
            if(is_active_sidebar('main-sidebar')){
                dynamic_sidebar('main-sidebar');
            }
            
            ?>
        </div>
        <?php endif ?>
    </div>

   <?php
    if(!post_password_required()){
        ?>
        <div class="col-xl-12 comment">
            <?php comments_template(); ?>
        </div>
        

        <?php
    }

   ?>



<!-- bootstrap cdn -->

<?php get_footer() ?>