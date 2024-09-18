<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twolinesarchitect
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body class="position-r">
<?php wp_body_open(); ?>	
    <!-- ==================== Start Loading ==================== -->

    <div class="loading">
        <span>L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div>

    <div id="preloader">
    </div>

    <!-- ==================== End Loading ==================== -->

	<!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->


    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                <img src="<?=get_template_directory_uri();?>/img/logo.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <?php
                           //$menus = get_registered_nav_menus();

                           $menu_name = 'menu-1'; //menu slug
                           $locations = get_nav_menu_locations();
                           // print_r($locations);
                           $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                           $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
                           
                           // echo "<pre>";
                           // print_r($menuitems);
                           // echo "</pre>";
                           if ($menuitems) {
                              $mainMenuCount = 1;
                               foreach ($menuitems as $menu_item) {
                                   // Check if the item has a parent
                                   if ($menu_item->menu_item_parent == 0) {
                                    //  print_r($menu_item);
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=$menu_item->url;?>"><?=$menu_item->title;?></a>
                                    </li>
                                    <?php
                                    }
                                 }
                           }
                           ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="showcase.html">Works</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->
