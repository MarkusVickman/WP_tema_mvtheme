<?php if (have_posts()) {
?>
    <!--Sektion med 2 artiklar-->
    <!-- Tänkt som högra kolumnen -->
    <section>
        <h2>Nyheter</h2>
        <?php
        query_posts('category_name=News&posts_per_page=20');
        while (have_posts()) {
            the_post(); ?>

            <!--Artikel med text och bild-->
            <!-- Skrivs ut från the post om kategori är news. Länkar till single.php -->
            <a href="<?php the_permalink(); ?>">
                <article class="news-frontpage color1">
                    <?php
                    if (has_post_thumbnail()) { ?>
                        <div class="image-container-sidebar">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php } ?>
                    <div class="image-container-sidebar">
                        <h3 class="underline"><?php the_title(); ?></h3>
                        <!-- Skriver ut kortad text -->
                        <?php $excerpt = get_the_excerpt(); ?>
                        <p><?php echo substr($excerpt, 0, 100); ?>.. Läs mer...</p>
                    </div>
                </article>
            </a>
        <?php }
        wp_reset_query();
        ?>

    </section>

<?php } ?>