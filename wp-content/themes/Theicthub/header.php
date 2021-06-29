<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!--// Meta Tags //-->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Theicthub - One Page Agency Template">
<meta name="keywords" content="agency,landing page,business,corporate,web agency">
<meta name="author" content="Theicthub">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title(); ?></title>
<style type="text/css">
    
</style>
<?php wp_head();?>
</head>
<body data-spy="scroll" data-target="#fixedNavbar" <?php body_class(); ?>>

<!--// Page Wrapper Start //-->
<div class="page-wrapper">

    <!--// Header Start //-->
    <header class="header fixed-top header-shrink" id="header">
        <div id="nav-menu-wrap">
            <div class="container">
                <nav class="navbar navbar-expand-lg p-0">
                    <a class="navbar-brand" href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/logos.png" alt="Logo White" class="img-fluid logo-transparent">
                        
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fixedNavbar" aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="togler-icon-inner">
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                            <span class="line-3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse main-menu justify-content-end" id="fixedNavbar">
                        <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'menu-1',
                                    'depth'             => 2,
                                    'container'         => 'div',
                                    //'container_class'   => '',
                                    //'container_id'      => '',
                                    'menu_class'        => 'navbar-nav',
                                   // 'fallback_cb'       => '',
                                    'walker'            => new WP_Bootstrap_Navwalker(),
                                ) );
                                ?>
                    </div>
                </nav>
                

            </div>
        </div>
    </header>
    <!--// Header End  //-->