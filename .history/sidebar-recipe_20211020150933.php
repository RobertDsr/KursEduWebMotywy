<div class="right">
                    <section class="overview">
                        <div class="difficulty">
                            Trudność:
                            <ul class="difficulty big">
                                <?php printRanking($post->ID); ?>
                            </ul>
                        </div>
                        <div class="time middle"><?php echo printPreparationTime($post->ID); ?></div>
                        <div class="diet"><?php echo get_post_meta($post->ID, '')?></div>
                    </section>

                    <section class="ingredients">
                        <h2>Składniki</h2>
                        <a class="print" href="#">Wydrukuj</a>
                        <ul>
                            <li class="chicken">Mięso <span>39 dag</span></li>
                            <li class="soup">Ryby <span>2 szt</span></li>
                            <li class="cake">Warzywa <span>1 szt</span></li>
                            <li class="fish">Makaron <span>3 łyżeczki</span></li>
                            <li class="chicken">Ziemniaki <span>10 g</span></li>
                            <li class="soup">Ryż <span>szczypta</span></li>
                            <li class="cake">Pieczywo <span>39 dag</span></li>
                            <li class="fish">Rzodkiewka <span>2 szt</span></li>
                            <li class="chicken">Por <span>1 szt</span></li>
                            <li class="soup">Seler <span>szczypta</span></li>
                            <li class="cake">Sałata <span>10 g</span></li>
                            <li class="fish">Pomidory <span>39 dag</span></li>
                        </ul>
                    </section>

                    <section class="widget">
                        <h2>Chmurka tagów</h2>
                        <h4>Popularne tematy</h4>
                        <div class="tag-cloud">
                            <a href='#' title='2 tematy' style='font-size: 16.5px;'>kurczak</a>
                            <a href='#' title='1 temat' style='font-size: 11px;'>makaron</a>
                            <a href='#' title='1 temat' style='font-size: 11px;'>pietruszka</a>
                            <a href='#' title='1 temat' style='font-size: 11px;'>pomidor</a>
                            <a href='#' title='2 tematy' style='font-size: 16.5px;'>sałata</a>
                            <a href='#' title='1 temat' style='font-size: 11px;'>warzywa</a> 
                            <a href='#' title='1 temat' style='font-size: 11px;'>pomidor</a>
                            <a href='#' title='2 tematy' style='font-size: 16.5px;'>sałata</a>
                            <a href='#' title='1 temat' style='font-size: 11px;'>warzywa</a>  </div>
                    </section>
                    <section class="widget">
                        <h2>Ostatnio dodane</h2>
                        <h4>Najnowsze restauracje</h4>
                        <ul>
                            <li><a href="#">Sałatka z chrupiącym indykiem</a></li>
                            <li><a href="#">Schab po węgiersku</a></li>
                            <li><a href="#">Sałatka z chrupiącym indykiem</a></li>
                            <li><a href="#">Bagietka francuska</a></li>
                            <li><a href="#">Zapiekanka krakowska</a></li>
                        </ul>
                    </section>

                </div>    