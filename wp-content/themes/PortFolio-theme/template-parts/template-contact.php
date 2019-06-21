<?php
/*
 Template Name: Contact
 */
get_header();
?>
<main >
    <div class="main_form">
        <h2 role="heading" id="title_form">
            Formulaire de Contact
        </h2>
        <div class="desc">
            <?php the_field('description');?>
        </div>
        <div class="cont_f">
            <div>
                <?= apply_filters('the_content', '[contact-form-7 id="34" title="Contact"]');?>
            </div>
            <div class="repeter">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('ref') ):

                    // loop through the rows of data
                    while ( have_rows('ref') ) : the_row();

                        // display a sub field value
                        the_sub_field('label');
                        the_sub_field('content');

                    endwhile;

                else :

                    // no rows found

                endif;

                ?>
            </div>
        </div>

    </div>
</main>


<?php
    get_footer();
?>
