<?php
get_header();
?>

<main class="main" id="index">
    <section class="sec-cont-proj">
        <div class="proj-cont">
            <h2 role="heading" id="main_title">
                <?php include 'public/assets/yves.svg';?>
            </h2>
            <?php
            $project = new WP_Query(
                [
                    'post_type'=>'project',
                    'order'=> 'DESC',
                    'order_by'=>'date'
                ]
            );
            if ($project->have_posts()):while ($project->have_posts()):$project->the_post();
            ?>
                <div class="cont_proj">
                    <div>
                        <h3 class="title_proj">
                            <?php the_title();?>
                        </h3>
                        <div class="excerp_proj">
                            <?php the_excerpt();?>
                        </div>
                        <div class="link_proj">
                            <a href="<?php the_permalink();?>">Voir le projet</a>
                        </div>
                    </div>
                </div>
            <?php endwhile;?>

            <?php endif;?>
        </div>
    </section>
</main>
<?php
    get_footer();
?>
