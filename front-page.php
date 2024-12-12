<?php
/* 
Template name: Frontpage with sidebar.
*/
?>

<?php
get_header();
?>

<!--Sidans huvud innehåll-->
<main>

    <!-- Skriver ut inlägg med categori Frontpage -->
    <?php
    query_posts('category_name=Frontpage&posts_per_page=10');
    if (have_posts()) {
    ?>
        <!-- Vänstra kolumnen-->
        <div class="flex-container">
            <div class="intro-text-left">

                <?php while (have_posts()) {
                    the_post(); ?>

                    <article class="intro-article">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>

                        <div class="image-container">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            } ?>
                        </div>

                        <?php
                        if (is_active_sidebar('widget-frontpage')) { ?>
                            <div id="widget-frontpage">
                                <?php dynamic_sidebar('widget-frontpage'); ?>
                            </div>
                        <?php } ?>
                    </article>
                <?php } ?>
            </div>
        <?php }
    //Resettar the_post    
    wp_reset_query();

    //Laddar in högra kolumnen
    get_sidebar();
        ?>
        </div>
        <?php

        //Laddar in footer                        
        get_footer();
        ?>