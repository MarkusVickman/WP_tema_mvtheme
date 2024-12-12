<?php
get_header();
?>

<!--Sidans huvud innehåll-->
<main>

<!-- Skriver ut the post för single.php -->
    <?php while (have_posts()) {
        the_post(); ?>

        <article class="text-center">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>

            <?php if (has_post_thumbnail()) { ?>
                <div class="image-container">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php } ?>

        </article>

    <?php } ?>

    <?php
    get_footer();
    ?>