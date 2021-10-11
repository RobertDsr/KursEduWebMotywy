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
                        <section class="entry">
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

                        <section class="entry">
                            <div class="description width">
                                <h2><a href="#">Miód Malina</a></h2>
                                <div>
                                    <a href="#">Kuchnia tajska</a>
                                    <a href="#">Warszawa</a>
                                    <ul class="difficulty dark">
                                        <li class="active">&Bumpeq;</li>
                                        <li class="active">&Bumpeq;</li>
                                        <li>&Bumpeq;</li>
                                        <li>&Bumpeq;</li>
                                    </ul>
                                </div>
                                <p>Już od dawien dawna miałam ochotę wybrać się do Miodu Maliny i nareszcie udało mi się tam zjeść obiad. W walentynkowy wieczór w lokalu nie było przesadnie tłoczno, więc bez problemu udało się znaleźć stolik dla dwóch osób. Zamówiliśmy precla z dziczyzną (38 zł) i żeberka w glazurze miodowej z sosem śliwkowym (34 zł), oba dania [...]</p>
                                <a class="more" href="#">...</a>
                            </div>
                        </section>

                        <section class="entry">
                            <a href="#"><img src="content/restaurant-thumbnail2.jpg" alt="restaurant-thumbnail" /></a>
                            <div class="description">
                                <h2><a href="#">Trattoria Mamma Mia</a></h2>
                                <div>
                                    <a href="#">Kraków</a>
                                    <a href="#">kuchnia francuska</a>
                                    <ul class="difficulty dark">
                                        <li class="active">&Bumpeq;</li>
                                        <li class="active">&Bumpeq;</li>
                                        <li class="active">&Bumpeq;</li>
                                        <li class="active">&Bumpeq;</li> 
                                    </ul>
                                </div>
                                <p>Byłam już nie raz i nie dwa w Trattorii Mamma Mia i stwierdzam, że jedzenie jest tam po prostu wyśmienite. Obsługa jest bardzo miła, nie muszę czekać, aż ktoś łaskawie [...]</p>
                                <a class="more" href="#">...</a>
                            </div>
                        </section>
                        
                        <section class="entry">
                            <a href="#"><img src="content/restaurant-thumbnail2.jpg" alt="restaurant-thumbnail" /></a>
                            <div class="description">
                                <h2><a href="#">Trattoria Mamma Mia</a></h2>
                                <div>
                                    <a href="#">Kraków</a>
                                    <a href="#">kuchnia francuska</a>
                                    <ul class="difficulty dark">
                                        <li class="active">&Bumpeq;</li>
                                        <li class="active">&Bumpeq;</li>
                                        <li class="active">&Bumpeq;</li>
                                        <li class="active">&Bumpeq;</li> 
                                    </ul>
                                </div>
                                <p>Byłam już nie raz i nie dwa w Trattorii Mamma Mia i stwierdzam, że jedzenie jest tam po prostu wyśmienite. Obsługa jest bardzo miła, nie muszę czekać, aż ktoś łaskawie [...]</p>
                                <a class="more" href="#">...</a>
                            </div>
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

                <?php get_sidebar( 'restaurants-archive' ); ?>        
            </div>
        </section>

       