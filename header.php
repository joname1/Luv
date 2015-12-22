<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link id="favicon" href="http://joname.tk/favicon.png" rel="icon" type="image/x-icon" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,minimal-ui" />
    <title><?php wp_title( '-', true, 'right' ); ?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<div class="surface-content">
    <header class="site-header u-textAlignCenter hasImage"<?php echo 'style="background-image:url(' . get_template_directory_uri() . '/static/img/' . rand(1,12). '.jpg)"'?>>
        <h1 class="site-title">
            <a href="/" title=""><?php bloginfo( 'name' ); ?></a>
        </h1>
        <?php $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) : ?>
            <p class="site-description"><?php echo $description; ?></p>
        <?php endif;
        ?>
        <div class="social-links">
          <?php echo header_social_link();?>

        </div>
    </header>
    <nav class="topNav u-textAlignCenter">
        <div class="layoutSingleColumn">
            <?php wp_nav_menu( array( 'theme_location' => 'angela','menu_class'=>'topNav-items','container'=>'ul','fallback_cb' => 'link_to_menu_editor')); ?>
        </div>
    </nav>