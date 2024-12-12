<?php
get_header();
?>

<!--Sidans huvud innehåll-->
<main>

<!-- Skriver ut the_post. Fallbacksida -->
    <?php
    if (have_posts()) {
    ?>
        <div class="">
            <?php while (have_posts()) {
                the_post(); ?>
                <article class="text-center">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </article>
            <?php } ?>
        </div>
    <?php } ?>

    <?php
    get_footer();
    ?>