<?php get_header() ?>


<section id="header" class="recipes-archive">

    <div class="wooden">
        <div class="pos-center">

            <?php $slides_posts = new WP_Query(array(
                'post_type' => 'recipes',
                'post__in' => get_option('sticky_posts')
            )) ?>

            <div class="slides">
                <?php while ($slides_posts->have_posts()) : $slides_posts->the_post(); ?>
                    <div class="item">
                        <div>
                            <h3><?php the_title(); ?></h3>
                            <span>Czas przygotowania: <?php printPreparationTime($post->ID); ?></span>
                            <ul class="difficulty">
                                <?php printRanking($post->ID); ?>
                            </ul>
                        </div>
                        <img src="<?php echo get_post_meta($post->ID, 'slide', true) ?>" alt="<?php the_title() ?>" />
                    </div>
                <?php endwhile; ?>

            </div>
        </div>

        <div class="categories">
            <div class="pos-center">
                <ul>
                    <li><a class="dinner" href="<?php echo get_term_link('obiad', 'meal-type') ?>">Obiady</a></li>
                    <li><a class="breakfast" href="<?php echo get_term_link('sniadanie', 'meal-type') ?>">Śniadania</a></li>
                    <li><a class="snacks" href="<?php echo get_term_link('przekaski', 'meal-type') ?>">Przekąski</a></li>
                    <li><a class="desserts" href="<?php echo get_term_link('deser', 'meal-type') ?>">Desery</a></li>
                    <li class="last"><a class="drinks" href="<?php echo get_term_link('drinki-i-napoje', 'meal-type') ?>">Napoje i koktajle</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="caption">
        <div class="pos-center">
            <div class="left">

                <?php $search = getQuerySingleParam('search'); ?>


                <form class="search" method="get" action="<?php getCurrentPageUrl(); ?>">
                    <label for="search">Znajdź przepis:</label>
                    <fieldset>
                        <input type="text" name="search" id="search" value="<?php echo $search ?>" />
                        <input type="submit" value="" />
                    </fieldset>
                </form>
            </div>

            <div class="right fridge-form">
                <a href="#">Co masz w lodówce?</a>

                <div class="submenu">
                    <form method="get" action="#" class="transform">
                        <div class="first">
                            <ul>
                                <?php

                                $top_taxonomies = getTopTaxonomies('ingredients', 24);
                                foreach ($top_taxonomies as $taxonomy) :
                                    if ($taxonomy->parent != 0) :
                                ?>
                                        <li>
                                            <label>
                                                <input type='checkbox' name='ingredients[<?php echo $taxonomy->slug; ?>]' value="1" />
                                                <?php echo $taxonomy->name; ?>
                                            </label>
                                        </li>
                                <?php
                                    endif;
                                endforeach;
                                ?>
                            </ul>
                        </div>
                        <div class="second">

                        <?php

                        $cssClass = array(
                            'mieso' => 'mieso',
                            'owoce' => 'owoce',
                            'warzywa' => 'warzywa',
                            'przyprawy' => 'przyprawy',
                            'ryby' => 'ryby'
                        );

                                $taxonomies_lists = getHierarchicalTaxonomies('ingredients');

                                foreach($cssClass as $slug=>$css) :
                                    if(isset($taxonomies_lists[$slug])) :
                                        $tax = $taxonomies_lists[$slug];
                        ?>

                            <div class="section <?php echo $cssClass[?>">
                                <h3>Warzywa</h3>
                                <ul>
                                    <li><label><input type="checkbox" name="first" />Sól</label></li>
                                    <li><label><input type="checkbox" name="first" />Czosnek</label></li>
                                    <li><label><input type="checkbox" name="first" />Pieprz</label></li>
                                    <li><label><input type="checkbox" name="first" />Cebula</label></li>
                                    <li><label><input type="checkbox" name="first" />Curry</label></li>
                                    <li><label><input type="checkbox" name="first" />Sól</label></li>
                                    <li><label><input type="checkbox" name="first" />Czosnek</label></li>
                                    <li><label><input type="checkbox" name="first" />Pieprz</label></li>
                                    <li><label><input type="checkbox" name="first" />Cebula</label></li>
                                </ul>
                            </div>

                        </div>

                        <button>Pokaż przepisy</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="gradient">
        <div class="pos-center">&nbsp;</div>
    </div>
</section>

<section id="recipes" class="content">
    <div class="pos-center">
        <div class="left">

            <div class="wrapper">

                <?php


                $query_params = getQueryParams();
                if (isset($query_params['search'])) {
                    $query_params['post_title_like'] = $query_params['search'];
                    unset($query_params['search']);
                }
                $loop = new WP_Query($query_params);


                if ($loop->have_posts()) :

                    while ($loop->have_posts()) : $loop->the_post();

                ?>

                        <section id="recipe-<?php the_ID(); ?>" <?php post_class('entry') ?>>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div>
                                <span><?php echo printPreparationTime($post->ID); ?></span>
                                <ul class="difficulty dark">
                                    <?php printRanking($post->ID); ?>
                                </ul>
                            </div>
                            <p><?php the_excerpt_max_charlength(94); ?></p>
                            <a class="more" href="<?php the_permalink(); ?>">...</a>
                        </section>

                    <?php endwhile; ?>

                <?php else : ?>
                    <h4>Nie ma żadnych postów</h4>

                <?php endif; ?>


            </div>

            <div class="pagination">
                <?php

                generatePagination(get_query_var('paged'), $loop);
                ?>
            </div>
        </div>


        <?php get_sidebar('recipes-archive'); ?>
    </div>
</section>

<?php get_footer(); ?>