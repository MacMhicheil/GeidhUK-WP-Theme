<?php
    /**
     * The header template file
     *
     * @package Gèidh.uk
     * @since Gèidh.uk 1.0
     */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
<div style="text-align:right; background-color: #fb135b;"><a class="navbar-brand" href="https://geidh.uk/wp-admin/"><i class="fas fa-sign-in-alt"></i> <a style="color: white;" class="navbar-brand" href="https://geidh.uk/feed"><i class="fa fa-rss"></i> <a style="color: white;" class="navbar-brand" href="https://twitter.com/GeidhUK"><i class="fab fa-twitter"></i></a> <a style="color: white;" class="navbar-brand" href="https://www.facebook.com/GeidhUK/?ref=aymt_homepage_panel&eid=ARAKFNKdf8qb7R3YzobI2OnaH34Q0LDBCI0kubhd-k9FXaUUBoSCZ4Rwe2yNcpYd2PMLkeIXsN6_xucA"><i class="fab fa-facebook-f"></i></a> <a style="color: white;" class="navbar-brand" href="https://www.youtube.com/channel/UCyjCOarZ4jwljuKTOlRzrrg?view_as=subscriber"><i class="fab fa-youtube"></i></a> <a style="color: white;" class="navbar-brand" href="mailto:chris@macmhicheil.uk"><i class="fa fa-envelope"></i></a></div>
<div style="text-align: center; background-color: #FB135B; padding-bottom: 15px; color: white;">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-fluid" src="https://geidh.uk/wp-content/themes/Geidh.uk/Geidh_Banner_Alpha.png" width="750px"><br/></a><br/>
	<!--<p><a style="color: white; padding: 25px;" href="<?php echo esc_url( home_url( '/' ) ); ?>">Dachaigh</a> <a style="color: white; padding: 25px;" href="https://geidh.uk/briathrachas-lcdte/">Briathrachas LCDTE+</a> <a style="color: white; padding: 25px;" href="https://geidh.uk/tachartasan/">Tachartasan</a> <a style="color: white; padding: 25px;" href="https://geidh.uk/category/blog/">Blog</a> <a style="color: white; padding: 25px;" href="https://geidh.uk/ceanglaichean/">Ceanglaichean</a> <a style="color: white; padding: 25px;" href="https://geidh.uk/mu-dheidhinn/">Mu Dheidhinn</a></p>-->
</div>	
<nav class="navbar navbar-dark navbar-expand-md navbar-light" role="navigation" style="background-color: #fb135b;">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
	</div>
</nav>
<div class="container" style="padding-top: 10px">
    	<form role="search" method="get" class="search-form input-group-prepend" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        	<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Lorg sna postaichean &hellip;', 'placeholder', 'WPTheme' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    	</form>
</div>