<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
    <?php wp_head(); ?>
</head>

<body>

    <!--Container för att hålla footern på plats-->
    <div class="page-container">
        <div class="page-height-without-footer">

            <!-- Header -->
            <header>

                <!-- Navigering som skrivs ut med wordpress -->
                <nav>
                    <?php
                    wp_nav_menu(array('theme_location' => 'main-menu'));
                    ?>
                </nav>
            </header>

            <!-- Inledande "Herotext"/logotext som skrivs ut med wordpress-->
            <?php
            query_posts("category_name=Intro&posts_per_page=1");
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
                    <!--Inledande sektion-->
                    <div class="leading-section-container">
                        <section class="leading-section">
                            <h1>
                                <?php the_title(); ?>
                            </h1>
                            <?php the_content(); ?>
                        </section>
                    </div>
            <?php
                }
            }

            //återställer the_post query.
            wp_reset_query();
            ?>