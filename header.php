<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<h3 class="text-center">
<?php
wp_nav_menu(array(
    'theme_location' => 'primary menu',
    'fallback_cb' => false,
    'menu_class' => 'main_menu'
))

?>
</h3>
