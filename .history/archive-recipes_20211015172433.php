<?php get_header()?>

        
        <section id="header" class="recipes-archive">

            <div class="wooden">
                <div class="pos-center">

                <?php $slides_posts = new WP_Query(array(
                    'post_type' => 'recipes',
                    'post__in' => get_option( 'sticky_posts' )
                )) ?>

                    <div class="slides">
                        <?php while($slides_posts->have_posts()) : $slides_posts->the_post(); ?>
                        <div class="item">
                            <div>
                                <h3><?php the_title(); ?></h3>
                                <span>Czas przygotowania: <?php printPreparationTime($post->ID); ?></span>
                                <ul class="difficulty">
                                    <?php printRanking($post->ID); ?>
                                </ul>
                            </div>
                            <img src="<?php echo get_post_meta()?>">
                        </div>

                    </div>
                </div>

                <div class="categories">
                    <div class="pos-center">
                        <ul>
                            <li><a class="dinner" href="<?php echo get_term_link( 'obiad', 'meal-type' )?>">Obiady</a></li>
                            <li><a class="breakfast" href="<?php echo get_term_link( 'sniadanie', 'meal-type' )?>">Śniadania</a></li>
                            <li><a class="snacks" href="<?php echo get_term_link( 'przekaski', 'meal-type' )?>">Przekąski</a></li>
                            <li><a class="desserts" href="<?php echo get_term_link( 'deser', 'meal-type' )?>">Desery</a></li>
                            <li class="last"><a class="drinks" href="<?php echo get_term_link( 'drinki-i-napoje', 'meal-type' )?>">Napoje i koktajle</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <section class="caption">
                <div class="pos-center">
                    <div class="left">
                        <form class="search" method="get" action="#">
                            <label for="search">Znajdź przepis:</label>
                            <fieldset>
                                <input type="text" name="search" id="search" value="" />
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
                                        <li><label><input type="checkbox" name="first" />Sól</label></li>
                                        <li><label><input type="checkbox" name="first" />Czosnek</label></li>
                                        <li><label><input type="checkbox" name="first" />Majeranek</label></li>
                                        <li><label><input type="checkbox" name="first" />Makaron</label></li>
                                        <li><label><input type="checkbox" name="first" />Kasza</label></li>
                                        <li><label><input type="checkbox" name="first" />Majeranek</label></li>
                                        <li><label><input type="checkbox" name="first" />Sól</label></li>
                                        <li><label><input type="checkbox" name="first" />Czosnek</label></li>
                                        <li><label><input type="checkbox" name="first" />Sól</label></li>
                                        <li><label><input type="checkbox" name="first" />Czosnek</label></li>
                                        <li><label><input type="checkbox" name="first" />Majeranek</label></li>
                                        <li><label><input type="checkbox" name="first" />Makaron</label></li>
                                        <li><label><input type="checkbox" name="first" />Kasza</label></li>
                                        <li><label><input type="checkbox" name="first" />Majeranek</label></li>
                                        <li><label><input type="checkbox" name="first" />Sól</label></li>
                                        <li><label><input type="checkbox" name="first" />Czosnek</label></li>
                                        <li><label><input type="checkbox" name="first" />Sól</label></li>
                                        <li><label><input type="checkbox" name="first" />Czosnek</label></li>
                                        <li><label><input type="checkbox" name="first" />Majeranek</label></li>
                                        <li><label><input type="checkbox" name="first" />Makaron</label></li>
                                        <li><label><input type="checkbox" name="first" />Kasza</label></li>
                                        <li><label><input type="checkbox" name="first" />Majeranek</label></li>
                                        <li><label><input type="checkbox" name="first" />Sól</label></li>
                                        <li><label><input type="checkbox" name="first" />Czosnek</label></li>
                                    </ul>
                                </div>
                                <div class="second">
                                    <div class="section vegetables">
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

                                    <div class="section meat">
                                        <h3>Mięso</h3>
                                        <ul>
                                            <li><label><input type="checkbox" name="first" />Majeranek</label></li>
                                            <li><label><input type="checkbox" name="first" />Bazylia</label></li>
                                            <li><label><input type="checkbox" name="first" />Cytryna</label></li>
                                            <li><label><input type="checkbox" name="first" />Majeranek</label></li>
                                            <li><label><input type="checkbox" name="first" />Bazylia</label></li>
                                            <li><label><input type="checkbox" name="first" />Cytryna</label></li>
                                        </ul>
                                    </div>

                                    <div class="section fish">
                                        <h3>Ryby</h3>
                                        <ul>
                                            <li><label><input type="checkbox" name="first" />Sól</label></li>
                                            <li><label><input type="checkbox" name="first" />Czosnek</label></li>
                                            <li><label><input type="checkbox" name="first" />Pieprz</label></li>
                                            <li><label><input type="checkbox" name="first" />Cebula</label></li>
                                            <li><label><input type="checkbox" name="first" />Curry</label></li>
                                            <li><label><input type="checkbox" name="first" />Sól</label></li>
                                        </ul>
                                    </div>

                                    <div class="section fruits">
                                        <h3>Owoce</h3>
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
                                            <li><label><input type="checkbox" name="first" />Czosnek</label></li>
                                            <li><label><input type="checkbox" name="first" />Pieprz</label></li>
                                            <li><label><input type="checkbox" name="first" />Cebula</label></li>
                                        </ul>
                                    </div>

                                    <div class="section other">
                                        <h3>Inne</h3>
                                        <ul>
                                            <li><label><input type="checkbox" name="first" />Sól</label></li>
                                            <li><label><input type="checkbox" name="first" />Czosnek</label></li>
                                            <li><label><input type="checkbox" name="first" />Pieprz</label></li>
                                            <li><label><input type="checkbox" name="first" />Cebula</label></li>
                                            <li><label><input type="checkbox" name="first" />Curry</label></li>
                                            <li><label><input type="checkbox" name="first" />Sól</label></li>
                                            <li><label><input type="checkbox" name="first" />Czosnek</label></li>
                                            <li><label><input type="checkbox" name="first" />Pieprz</label></li>
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

                        <section class="entry">
                            <a href="#"><img src="content/home-slider-1.jpg" alt="home-slider-1" /></a>
                            <h2><a href="#">Sałatka z chrupiącym indykiem</a></h2>
                            <div>
                                <span>34 min</span>
                                <ul class="difficulty dark">
                                    <li class="active">&Bumpeq;</li>
                                    <li class="active">&Bumpeq;</li>
                                    <li class="active">&Bumpeq;</li>
                                    <li>&Bumpeq;</li>
                                </ul>
                            </div>
                            <p>Uświetni każdą okazję. Najsłynniejszy i chyba najbardziej lubiany deser świata. Bez piec [...]</p>
                            <a class="more" href="#">...</a>
                        </section>

                        <section class="entry">
                            <a href="#"><img src="content/home-slider-1.jpg" alt="home-slider-1" /></a>
                            <h2><a href="#">Sałatka z chrupiącym kurczakiem</a></h2>

                            <div>
                                <span>1h 33min</span>
                                <ul class="difficulty dark">
                                    <li class="active">&Bumpeq;</li>
                                    <li class="active">&Bumpeq;</li>
                                    <li>&Bumpeq;</li>
                                    <li>&Bumpeq;</li>
                                </ul>
                            </div>
                            <p>Uświetni każdą okazję. Najsłynniejszy i chyba najbardziej lubiany deser świata. Bez piec [...]</p>
                            <a class="more" href="#">...</a>
                        </section>

                        <section class="entry">
                            <a href="#"><img src="content/home-slider-1.jpg" alt="home-slider-1" /></a>
                            <h2><a href="#">Sałatka z chrupiącym indykiem</a></h2>
                            <div>
                                <span>34 min</span>
                                <ul class="difficulty dark">
                                    <li class="active">&Bumpeq;</li>
                                    <li class="active">&Bumpeq;</li>
                                    <li class="active">&Bumpeq;</li>
                                    <li>&Bumpeq;</li>
                                </ul>
                            </div>
                            <p>Uświetni każdą okazję. Najsłynniejszy i chyba najbardziej lubiany deser świata. Bez piec [...]</p>
                            <a class="more" href="#">...</a>
                        </section>

                        <section class="entry">
                            <a href="#"><img src="content/home-slider-1.jpg" alt="home-slider-1" /></a>
                            <h2><a href="#">Sałatka z chrupiącym kurczakiem</a></h2>

                            <div>
                                <span>1h 33min</span>
                                <ul class="difficulty dark">
                                    <li class="active">&Bumpeq;</li>
                                    <li class="active">&Bumpeq;</li>
                                    <li>&Bumpeq;</li>
                                    <li>&Bumpeq;</li>
                                </ul>
                            </div>
                            <p>Uświetni każdą okazję. Najsłynniejszy i chyba najbardziej lubiany deser świata. Bez piec [...]</p>
                            <a class="more" href="#">...</a>
                        </section>

                        <section class="entry">
                            <a href="#"><img src="content/home-slider-1.jpg" alt="home-slider-1" /></a>
                            <h2><a href="#">Sałatka z chrupiącym indykiem</a></h2>
                            <div>
                                <span>34 min</span>
                                <ul class="difficulty dark">
                                    <li class="active">&Bumpeq;</li>
                                    <li class="active">&Bumpeq;</li>
                                    <li class="active">&Bumpeq;</li>
                                    <li>&Bumpeq;</li>
                                </ul>
                            </div>
                            <p>Uświetni każdą okazję. Najsłynniejszy i chyba najbardziej lubiany deser świata. Bez piec [...]</p>
                            <a class="more" href="#">...</a>
                        </section>

                        <section class="entry">
                            <a href="#"><img src="content/home-slider-1.jpg" alt="home-slider-1" /></a>
                            <h2><a href="#">Sałatka z chrupiącym kurczakiem</a></h2>

                            <div>
                                <span>1h 33min</span>
                                <ul class="difficulty dark">
                                    <li class="active">&Bumpeq;</li>
                                    <li class="active">&Bumpeq;</li>
                                    <li>&Bumpeq;</li>
                                    <li>&Bumpeq;</li>
                                </ul>
                            </div>
                            <p>Uświetni każdą okazję. Najsłynniejszy i chyba najbardziej lubiany deser świata. Bez piec [...]</p>
                            <a class="more" href="#">...</a>
                        </section>

                        <section class="entry">
                            <a href="#"><img src="content/home-slider-1.jpg" alt="home-slider-1" /></a>
                            <h2><a href="#">Sałatka z chrupiącym indykiem</a></h2>
                            <div>
                                <span>34 min</span>
                                <ul class="difficulty dark">
                                    <li class="active">&Bumpeq;</li>
                                    <li class="active">&Bumpeq;</li>
                                    <li class="active">&Bumpeq;</li>
                                    <li>&Bumpeq;</li>
                                </ul>
                            </div>
                            <p>Uświetni każdą okazję. Najsłynniejszy i chyba najbardziej lubiany deser świata. Bez piec [...]</p>
                            <a class="more" href="#">...</a>
                        </section>

                        <section class="entry">
                            <a href="#"><img src="content/home-slider-1.jpg" alt="home-slider-1" /></a>
                            <h2><a href="#">Sałatka z chrupiącym kurczakiem</a></h2>

                            <div>
                                <span>1h 33min</span>
                                <ul class="difficulty dark">
                                    <li class="active">&Bumpeq;</li>
                                    <li class="active">&Bumpeq;</li>
                                    <li>&Bumpeq;</li>
                                    <li>&Bumpeq;</li>
                                </ul>
                            </div>
                            <p>Uświetni każdą okazję. Najsłynniejszy i chyba najbardziej lubiany deser świata. Bez piec [...]</p>
                            <a class="more" href="#">...</a>
                        </section>

                        <section class="entry">
                            <a href="#"><img src="content/home-slider-1.jpg" alt="home-slider-1" /></a>
                            <h2><a href="#">Sałatka z chrupiącym indykiem</a></h2>
                            <div>
                                <span>34 min</span>
                                <ul class="difficulty dark">
                                    <li class="active">&Bumpeq;</li>
                                    <li class="active">&Bumpeq;</li>
                                    <li class="active">&Bumpeq;</li>
                                    <li>&Bumpeq;</li>
                                </ul>
                            </div>
                            <p>Uświetni każdą okazję. Najsłynniejszy i chyba najbardziej lubiany deser świata. Bez piec [...]</p>
                            <a class="more" href="#">...</a>
                        </section>

                        <section class="entry">
                            <a href="#"><img src="content/home-slider-1.jpg" alt="home-slider-1" /></a>
                            <h2><a href="#">Sałatka z chrupiącym kurczakiem</a></h2>

                            <div>
                                <span>1h 33min</span>
                                <ul class="difficulty dark">
                                    <li class="active">&Bumpeq;</li>
                                    <li class="active">&Bumpeq;</li>
                                    <li>&Bumpeq;</li>
                                    <li>&Bumpeq;</li>
                                </ul>
                            </div>
                            <p>Uświetni każdą okazję. Najsłynniejszy i chyba najbardziej lubiany deser świata. Bez piec [...]</p>
                            <a class="more" href="#">...</a>
                        </section>


                    </div>

                    <div class="pagination">
                        <ul>
                            <li><a href="#" class="prev page-numbers">«</a></li>
                            <li><span class="current">1</span></li>
                            <li><a href="#" class="page-numbers">2</a></li>
                            <li><a href="#" class="next page-numbers">»</a></li>
                        </ul>
                    </div>
                </div>


                   <?php get_sidebar( 'recipes-archive' ); ?>        
            </div>
        </section>

    <?php get_footer(); ?>