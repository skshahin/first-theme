<h2>
    <?php
    $comment_num = get_comments_number();
        if(1==$comment_num){
            echo '1 comments have';
        }else{
            echo $comment_num.' comments have';
        }

    ?>
</h2>
<?php
wp_list_comments();

if(!comments_open()){ ?>
<h3><?php  _e('comments are closed','alpha'); ?></h3>
<?php
   
}

the_comments_pagination(array(
    'screen_reader_text'=>__('pagination','alpha'),
    'prev_text'=>'<'.__('previous comments','alpha'), 
    'next_text'=>'>'.__('next comments','alpha')
));

comment_form();