<?php
/**
 * Template Name: pricing Table
 */

get_header();
?>
    <?php
        $pricing = get_post_meta(get_the_ID(),'_alpha_pt_pricing_table',true);
        $service = get_post_meta(get_the_ID(),'_alpha_ser_service',true);
    ?>

    <div class="container">
        <div class="row">
            <?php
            foreach($pricing as $pc): ?>
                <div class="col-xl-4">
                    <h3><?php echo esc_html($pc['_alpha_pt_pricing_caption']); ?></h3>
                    <ul>
                        <?php
                        foreach($pc['_alpha_pt_pricing_option'] as $pto):
                        ?>
                        <li>
                            <?php echo esc_html($pto); ?>
                        </li>

                        <?php endforeach; ?>
                    </ul>
                    <h4><?php echo esc_html($pc['_alpha_pt_pricing']); ?></h4>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="row mt-5">
            <?php foreach($service as $ser) : 
                $alpha_icon = $ser['_alpha_ser_icon'];
                ?>
                <div class="col-xl-4">

                    <i class="fab <?php echo esc_attr($alpha_icon) ?>"></i>

                    <h2><?php echo esc_html($ser['_alpha_ser_title']) ?></h2>

                    <p>
                        <?php echo apply_filters('the_content',$ser['_alpha_ser_content']); ?>
                    </p>

                </div>
            <?php endforeach; ?>
        </div>
    </div>


<?php
 get_footer();