<!-- ***** Header Area Start ***** -->
<header class="header">
    <div class="header__content row">

        <div class="header__logo">
            <?php 
            // Site Logo
            echo sasu_theme_logo('logo');
            ?>
        </div> <!-- end header__logo -->
            <?php 
            if( has_nav_menu( 'social-menu' ) && sasu_opt('sasu_headersocial_toggle') ){
                $args = array(
                    'theme_location' => 'social-menu',
                    'container'      => '',
                    'depth'          => 1,
                    'menu_class'     => 'header__social',
                    'fallback_cb'    => 'sasu_social_navwalker::fallback',
                    'walker'         => new sasu_social_navwalker(),
                );  
                wp_nav_menu( $args );
            }
            ?>
        <?php 
        if( sasu_opt( 'sasu_hsearchform_toggle' ) ):
        ?>
        <a class="header__search-trigger" href="#0"></a>

        <div class="header__search">
            <form role="search" method="get" class="header__search-form" action="<?php echo esc_url( site_url('/') ); ?>">
                <label>
                    <span class="hide-content"><?php esc_html_e( 'Search for:', 'sasu' ); ?></span>
                    <input type="search" class="search-field" placeholder="<?php esc_html_e( 'Type Keywords', 'sasu' ); ?>" name="s" title="<?php esc_html_e( 'Search for:', 'sasu' ); ?>" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="<?php esc_html_e( 'Search', 'sasu' ); ?>">
            </form>

            <a href="#0" title="<?php esc_html_e( 'Close Search', 'sasu' ); ?>" class="header__overlay-close"><?php esc_html_e( 'Close', 'sasu' ); ?></a>

        </div>  <!-- end header__search -->
        <?php 
        endif;
        ?>

        <a class="header__toggle-menu" href="#0" title="Menu"><span><?php esc_html_e( 'Menu', 'sasu' ); ?></span></a>

        <nav class="header__nav-wrap">

            <h2 class="header__nav-heading h6"><?php esc_html_e( 'Site Navigation', 'sasu' ); ?></h2>
                <?php 
                if( has_nav_menu( 'primary-menu' ) ){
                    $args = array(
                        'theme_location' => 'primary-menu',
                        'container'      => '',
                        'depth'          => 2,
                        'menu_class'     => 'header__nav',
                        'fallback_cb'    => 'sasu_bootstrap_navwalker::fallback',
                        'walker'         => new sasu_bootstrap_navwalker(),
                    );  
                    wp_nav_menu( $args );
                }
                ?>

            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu"><?php esc_html_e( 'Close', 'sasu' ); ?></a>

        </nav> <!-- end header__nav-wrap -->

    </div> <!-- header-content -->
</header> <!-- header -->