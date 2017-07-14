<div class="page-container">
    <div class="page-container funds-container">
        <div class="page-container funds-container-hero">

            <div class="funds-container-hero-gradient">
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <div class="container row-spacing">
                    <!--
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="h1-sm text-center"><?php the_field('heading'); ?></h1>
                        </div>
                    </div>
                    -->
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="h1-sm text-center"><?php _e('Vanust 18 - 55? Sulle on mõeldud<br>Tuleva Maailma Aktsiate Pensionifond.'); ?></h1>
                        </div>
                    </div>
                    <div class="row mt-5 top-buffer">
                        <div class="col-md-12">
                            <p class="h1-sm text-center"><?php _e('Selle fondi on juba valinud 3669 inimest - nende seas ka Tuleva asutajad ja enamik liikmeid.<br>Kui oled üle 55-aastane, kaalu meie võlakirjafondi.<br>Pensionifondi vahetus on sulle tasuta ja võtab netipangas 5 minutit.') ?></p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12 text-center">
                            <a href="https://tuleva.ee/kuidas-tuua-pension-tulevasse/" class="btn btn-primary btn-lg">
                                <?php _e('Vali Tuleva pensionifond') ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


<!--     <div>
        <div class="row">
            <div class="col-md-4">
                <h1 class="h1-sm text-center"><?php _e('Kuidas fondi valida?'); ?></h1>
            </div>
            <div class="col-md-4">
                <h1 class="h1-sm text-center"><?php _e('Kas Tuleva on turvaline?'); ?></h1>
            </div>
            <div class="col-md-4">
                <h1 class="h1-sm text-center"><?php _e('Miks kulud loevad?'); ?></h1>
            </div>
        </div>
    </div> -->

    <?php
    get_template_part('templates/components/fund-navigation');
    get_template_part('templates/components/fund-choosing');
    get_template_part('templates/components/security');
    get_template_part('templates/components/fund-fees');
    get_template_part('templates/components/fund-calculator');
    //get_template_part('templates/components/fund-counter');
    ?>

    <?php
        if (have_rows('fund_components')) {
            while (have_rows('fund_components')) { the_row();
                if (get_row_layout() === 'text_boxes') {
                    get_template_part('templates/components/text-boxes');
                } elseif (get_row_layout() === 'button') {
                    get_template_part('templates/components/button');
                } elseif (get_row_layout() === 'media') {
                    get_template_part('templates/components/media');
                } elseif (get_row_layout() === 'text_rows_block') {
                    get_template_part('templates/components/text-rows-block');
                } elseif (get_row_layout() === 'comparison_block') {
                    get_template_part('templates/components/comparison-block');
                } elseif (get_row_layout() === 'single_quote_block') {
                    get_template_part('templates/components/single-quote-block');
    } elseif (get_row_layout() === 'fund_contacts_block') {
                    get_template_part('templates/components/fund-contacts-block');
                }
            }
        }
    ?>

    <?php get_template_part('templates/components/fund-qa'); ?>

    <?php endwhile; ?>
</div>
