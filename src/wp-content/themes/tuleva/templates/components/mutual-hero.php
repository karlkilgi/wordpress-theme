<section id="<?php the_sub_field('component_id'); ?>" class="bg-hero-mutual">
    <div class="container">
        <div class="row py-6">
            <div class="col-md-10 mx-auto text-center">
                <h1 class="mb-5"><?php the_sub_field('heading'); ?></h1>
            </div>
            <?php if (get_sub_field('quote')) { ?>
                <div class="col-md-8 mx-auto text-center">
                    <p class="lead text-navy mb-3">"<?php the_sub_field('quote'); ?>"</p>
                    <?php if (get_sub_field('source')) { ?>
                        <p class="text-navy mb-5">
                            <?php if (get_sub_field('source_link_url')) { ?>
                                <a href="<?php the_sub_field('source_link_url'); ?>" class="text-navy text-bold">
                            <?php } ?>
                                <u><?php the_sub_field('source'); ?></u>
                            <?php if (get_sub_field('source_link_url')) { ?></a><?php } ?>, <?php the_sub_field('source_description'); ?>
                        </p>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
