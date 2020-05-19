<div class="container-fluid bc_default_primary bc_nav_bar_container">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark m-auto d-table">
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon navbar-dark"></span>
            </button>
            <?php 
                $args = [
                'menu' => 'main-menu',
                'depth' => 2,
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarSupportedContent',
                'menu_class' => 'navbar-nav m-auto',
                'fallback_cb'     => 'Bluecorona_WP_Bootstrap_Navwalker::fallback',
                'walker' => new Bluecorona_WP_Bootstrap_Navwalker(),
                ];
                wp_nav_menu( $args )
            ?>
        </nav>
    </div>
</div>
