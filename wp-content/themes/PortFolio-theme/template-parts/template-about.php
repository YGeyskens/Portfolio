<?php
/*
 Template Name: About
 */
get_header();
?>
<main>
    <h2 role="heading" class="ab-title"><?php the_title();?></h2>
    <div class="about_desc">
        <?php the_field('description');?>
    </div>
    <div class="about_image">
        <img src="<?php the_field('image');?>" alt="">
    </div>
    <div class="about_list">
        <ul class="ab_lst">
            <li class="ab_lst_itm">
                <a href="<?php the_field('Github');?>">Mon Profil Github</a>
            </li>
            <li>
                <a href="<?php the_field('Twitter');?>">Mon Profil Twitter</a>
            </li>
            <li>
                <a href="<?php the_field('Facebook');?>">Mon Profil Facebook</a>
            </li>
            <li>
                <a href="<?php the_field('Instagram');?>">Mon Profil Instagram</a>
            </li>
        </ul>
    </div>
</main>
<?php
    get_footer();
?>
