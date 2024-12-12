<?php
/* 
Template name: Standard page with no sidebar.
*/
?>

<?php
get_header();
?>

<!--Sidans huvud innehåll-->
<main>

    <h2>Våra tjänster</h2>

    <!-- Skriver ut inlägg med categori Products -->
    <?php
    query_posts('category_name=Products&posts_per_page=10');
    if (have_posts()) {

        //int för att identifiera hur många gånger loopen kört
        $num = 0;

        while (have_posts()) {
            the_post();

            //Plussar på int-variabeln och skriver ut the_post på olika sidor av skärmen beroende på hur många gånger den loopat
            $num++;
            if ($num % 2 == 0) { ?>

                <!--Artikel med text och bild-->
                <article class="news color1">
                    <?php
                    if (has_post_thumbnail()) { ?>
                        <div class="image-container">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php } ?>
                    <div class="image-container">
                        <h3 class="underline"><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php
            } else { ?>

                <!--Artikel med text och bild-->
                <article class="news color2">
                    <div class="image-container">
                        <h3 class="underline"><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                    <div class="image-container">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </article>
    <?php
            }
        }
    }
    wp_reset_query();
    ?>

    <?php
    get_footer();
    ?>