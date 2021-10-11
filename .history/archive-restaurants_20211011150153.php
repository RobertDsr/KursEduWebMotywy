<?php get_header();?>
        
        <section id="header">

            <div class="map"></div>

            <section class="caption restaurant">
                <div class="pos-center">
                    <form class="search" method="get" action="">
                        <label for="search">Znajdź restaurację:</label>
                        <fieldset>
                            <input type="text" name="search" id="search" value="" />
                            <input type="submit" value="" />
                        </fieldset>
                    </form>
                </div>
            </section>
            
            <div class="gradient">
                <div class="pos-center">&nbsp;</div>
            </div>
        </section>

        <section id="restaurants" class="content">
            <div class="pos-center">
                <div class="left">
                    <h4 class="search-results">Wynik wyszukiwania:</h4>
                    
                    <div class="wrapper">

                    <?php if(have_posts()) :?>

                        <?php while ( have_posts() ) : the_posts(); ?>

                        <section id= class="<?php post_class( 'entry' )?>">
                            <a href="#"><img src="content/restaurant-thumbnail1.jpg" alt="restaurant-thumbnail3" /></a>
                            <div class="description">
                                <h2><a href="#">Restauracja Da Pietro</a></h2>
                                <div>
                                    <a href="#">kuchnia polska</a>
                                    <a href="#">Wrocław</a>
                                    <ul class="difficulty dark">
                                        <li class="active">&Bumpeq;</li>
                                        <li class="active">&Bumpeq;</li>
                                        <li class="active">&Bumpeq;</li>
                                        <li>&Bumpeq;</li>
                                    </ul>
                                </div>
                                <p>W restauracji byłem jakiś czas temu, udało mi się wstąpić dość późno ok. 23, ale obsługa powitała mnie bardzo miło. Zamówiłem sałatka z wędzonym pstrągiem i gnocchi z [...]</p>
                                <a class="more" href="#">...</a>
                            </div>
                        </section>

                    <?php endwhile; ?>

                    <?php else: ?>
                        <h4>Nie ma żadnych postów</h4>

                    <?php endif; ?>

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

                <?php get_sidebar( 'restaurants-archive' ); ?>        
            </div>
        </section>

       <?php get_footer(); ?>