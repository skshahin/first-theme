<?php
/*
*Template Name: custom query
*/

?>
<?php get_header(); ?>
<body <?php body_class('text-center'); ?>>
    <div class="container">
       <?php
       $paged = get_query_var('paged')?get_query_var('paged'):1;
    //    $post_id = array(107,131,137);
        $total = 9;
       $per_page = 3;
       $_p = new wp_Query(array(
        // 'category_name' => 'Famous Blog',
        'posts_per_page' => $per_page,
        'paged' => $paged,
        'tax_query' => array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'post_format',
                'field' => 'slug',
                'terms' => array(
                    'post-format-audio',
                    'post-format-video'
                )  
            )
        )
       ));
       ?>
        <?php 
        while($_p->have_posts())  { $_p->the_post();
            ?>
         
            <div class="row">
        <div class="col-xl-12">
           <a href="<?php the_permalink(); ?>"><h2><?php the_title() ?></h2></a> 
        </div>

         <?php
     }
     wp_reset_postdata();
     ?>

     <?php
     echo paginate_links(array(
        //  'total' => ceil(count($post_id)/$per_page)
        // 'total' => ceil($total/$per_page),
            'total' => $_p->max_num_pages,
            'current' => $paged
     ));
 

 get_footer(); ?>