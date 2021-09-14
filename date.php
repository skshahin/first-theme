<?php get_header(); ?>
<body <?php body_class(); ?>>
    <div class="container">
        <div class="title header">
            <h2 class="text-center">
                post in
            <?php
            if(is_month()){
               $month = get_query_var('monthnum');
               $Dateobj = DateTime::createFromFormat('!m',$month);
               echo $Dateobj->format('F');
            }else if(is_year()){
                echo esc_html(get_query_var('year'));
            }else if(is_day()){
                $day = esc_html(get_query_var('day'));
                $monthnum = esc_html(get_query_var('monthnum'));
                $year = esc_html(get_query_var('year'));
                printf("%s/%s/%s",$day,$monthnum,$year);
            }

            ?>
            </h2>
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
