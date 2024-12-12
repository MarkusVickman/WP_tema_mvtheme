<?php
/* 
Template name: About page.
*/
?>

<?php
get_header();
?>

<!--Sidans huvud innehåll-->
<main>

    <?php
    query_posts('category_name=About&posts_per_page=10');
    if (have_posts()) {
    ?>
        <div class="">

            <!-- Skriver ut inlägg med categori About -->
            <?php while (have_posts()) {
                the_post(); ?>

                <article class="text-center">
                    <h2> <?php the_title(); ?> </h2>
                    <?php the_content(); ?>

                    <div class="image-container">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } ?>
                    </div>
                </article>

            <?php } ?>

        </div>

    <?php }
    wp_reset_query();
    ?>


    <!-- Skriver ut formulär som inlägg med categori Form -->
    <?php
    query_posts('category_name=Form&posts_per_page=2');
    while (have_posts()) {
        the_post(); ?>
        <div class="form-container" id="contact-form">
            <?php the_content(); ?>
        </div>
    <?php }
    wp_reset_query();
    ?>


    <!-- Skriver ut inlägg med categori employees -->
    <?php
    query_posts('category_name=Employees&posts_per_page=10');
    if (have_posts()) {
    ?>
        <!--Sektion med 4 artiklar med header och bild-->

        <div>
            <div class="flex-container">
                <!--Artikel med titel och bild-->
                <?php
                while (have_posts()) {
                    the_post();
                ?>

                    <article class="image-container-sidebar">
                        <div class="underline"> <?php the_title(); ?> </div>
                        <?php the_content(); ?>
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } ?>
                    </article>

                <?php
                }
                ?>
            </div>
        </div>
    <?php } ?>

    <?php
    get_footer();
    ?>