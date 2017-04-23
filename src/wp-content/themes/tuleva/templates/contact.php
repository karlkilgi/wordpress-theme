<div class="page-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <?php if (get_the_title()) { ?>
                        <h1 class="page-title"><?php the_title(); ?></h1>
                    <?php } ?>
                    <h2>Tuleva üldine kontakttelefon: +372 644 5100</h2>
                    <div class="contacts-block">
                        <div class="col-md-4 contacts-block__item">
                            <img class="contacts-block__image" src="<?php echo get_template_directory_uri() ?>/img/tonu-pekk.png" alt="Tõnu Pekk">
                            <h2>Tõnu Pekk</h2>
                            <div class="contacts-block__row">
                                <a href="mailto:tonu.pekk@tuleva.ee">tonu.pekk@tuleva.ee</a>
                            </div>
                            <div class="contacts-block__row">+372 5304 4744</div>
                        </div>
                        <div class="col-md-4 contacts-block__item">
                            <img class="contacts-block__image" src="<?php echo get_template_directory_uri() ?>/img/priit-lepasepp.png" alt="Priit Lepasepp">
                            <h2>Priit Lepasepp</h2>
                            <div class="contacts-block__row">
                                <a href="mailto:priit.lepasepp@tuleva.ee">priit.lepasepp@tuleva.ee</a>
                            </div>
                            <div class="contacts-block__row">+372 5626 4164</div>
                        </div>
                        <div class="col-md-4 contacts-block__item">
                            <img class="contacts-block__image" src="<?php echo get_template_directory_uri() ?>/img/kristi-saare.png" alt="Kristi Saare">
                            <h2>Kristi Saare</h2>
                            <div class="contacts-block__row">
                                <a href="mailto:kristi.saare@tuleva.ee">kristi.saare@tuleva.ee</a>
                            </div>
                            <div class="contacts-block__row">+372 5558 8178</div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
