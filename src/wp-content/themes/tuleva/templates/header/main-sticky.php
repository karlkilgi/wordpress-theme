<header class="header header--sticky">
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand mr-lg-6" href="<?php bloginfo('url') ?>">
            <img class="brand-logo" alt="Tuleva" src="<?php echo get_template_directory_uri() ?>/img/tuleva-logo.svg">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdownSticky" aria-controls="navbarNavDropdownSticky"
            aria-expanded="false" aria-label="<?php _e('Toggle navigation', TEXT_DOMAIN); ?>">
            <span class="burger-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdownSticky">
            <?php get_template_part('templates/header/menu'); ?>
            <div class="d-flex flex-column flex-md-row align-items-md-center ml-auto">
                <?php language_picker(); ?>
                <?php _e('<a href="/en/transfer-pension-tuleva/" class="btn btn-primary btn-block d-block d-md-none d-lg-block ml-md-2 mt-4 mt-md-0">Switch to Tuleva</a>', TEXT_DOMAIN); ?>
            </div>
        </div>
    </nav>
</header>
