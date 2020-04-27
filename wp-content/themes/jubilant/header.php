<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> <?php wp_title('');?></title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>

    <div id="wrap">

        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-sm-6">
                    <a class="logo" href= "http://localhost:8888" > 
 
                        <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) {
                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                        }
                        ?>
 </a>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                       <?php get_search_form(); ?>
                    </div>
                    <div class="col-xs-4 text-right visible-xs">
                        <div class="mobile-menu-wrap">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-bars menu-icon"></i>
                        </div>
                    </div>
                </div>
			</div>
			
			</header>
            <div class="mobile-search">
            <form id="searchform" class="searchform">
                <div>
                    <label class="screen-reader-text">Sök efter:</label>
                    <input type="text"  value="<?php the_search_query(); ?>"/>
                    <input type="submit" value="Sök" />
                </div>
            </form>
        </div>

        <nav id="nav">
            <div class="container">
              
                    <div class="col-xs-12">
                    <?php 
                wp_nav_menu(
                        array(
                                'theme_location' => 'top-menu',
                                'menu_id' => 'menu',
                                'container' =>'ul',
                                'menu_class' => 'menu row current-menu-item',
                                )
                        ); ?>

                    
                </div>
            </div>
        </nav>
				