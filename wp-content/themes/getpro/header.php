<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/logo.png">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- START MAIN PART -->
    <main role="main">

        <!-- START NAVBAR HEADER -->
        <section class="navbar_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar_nav">
                            <nav class="navbar navbar-expand-lg navbar-light p-0">
                                <?php if (has_custom_logo()) : ?>
                                    <?php the_custom_logo(); ?>
                                <?php else : ?>
                                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
                                    </a>
                                <?php endif; ?>
                                
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'primary-menu',  // keep consistent with functions.php
                                            'container'      => false,
                                            'menu_class'     => 'navbar-nav ml-auto',
                                            'fallback_cb'    => false
                                        ));
                                        ?>
                                     </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END NAVBAR HEADER -->