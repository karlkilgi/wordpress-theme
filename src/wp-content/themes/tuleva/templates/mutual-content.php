<div class="page-container">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post();

        get_template_part('templates/components/mutual-header');
        get_template_part('templates/components/mutual-proposal');
        get_template_part('templates/components/reasons');
        get_template_part('templates/components/goals');
        get_template_part('templates/components/cta-join');
        get_template_part('templates/components/founder-stories');
        get_template_part('templates/components/signup');

        if (have_rows('mutual_components')) {
            while (have_rows('mutual_components')) { the_row();
                if (get_row_layout() === 'qa_block') {
                    get_template_part('templates/components/qa-block');
                }
            }
        }

        get_template_part('templates/components/modal-founders');

    endwhile; ?>
</div>
