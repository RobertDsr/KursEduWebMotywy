<?php get_header(); ?>

<?php the_post(); ?>

        <section id="header" class="entry">

            <div class="wooden">
                <div class="pos-center">
                    <header>
                        <h3><?php the_title(); ?></h3>
                        <span>Czas przygotowania: <?php printPreparationTime($post->ID); ?></span>
                        <ul class="difficulty">
                            <?php printRanking($post->ID); ?>
                        </ul>
                    </header>
                </div>
            </div>

            <section class="caption">
                <div class="pos-center">
                    <div class="left breadcrumbs">

                    <!-- <?php the_post_breadcrumb(); ?> -->

                    <div class="right">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </section>

            <div class="gradient">
                <div class="pos-center">&nbsp;</div>
            </div>
        </section>

        <section id="entry" class="content">
            <div class="pos-center">
                <article class="left"> 

                   <?php the_content('recipes'); ?>

                   

                   <?php comments_template(); ?>

                </article>

                <?php get_sidebar( 'recipe' ); ?>

            </div>
        </section>

        <?php get_footer(); ?>