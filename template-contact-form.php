<?php
/* 
Template name: All Forms with category form.
*/
?>

<?php
get_header();
?>

<!--Sidans huvud innehåll-->
<main>


    <!--Kontaktformulär-->
    <!-- Skriver ut formulär som inlägg med categori Form -->
    <?php
    query_posts('category_name=Form&posts_per_page=10');
    while (have_posts()) {
        the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div class="form-container" id="contact-form">
            <?php the_content(); ?>
        </div>
    <?php }
    wp_reset_query();
    ?>

    <?php
    get_footer();
    ?>