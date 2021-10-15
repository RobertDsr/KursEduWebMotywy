<?php get_header(); ?>

<section id="header" class="home-slider">

    <div class="wooden">
        <div class="pos-center">

            <div class="slides">

                <div class="item pepers">
                    <div class="caption">
                        <h3>Czerwone papryczki!</h3>
                        <p>
                            Papryka ostra – ogólna nazwa, jaką określa się owoce niektórych odmian, kultywarów i mieszańców papryki (Capsicum) o bardzo ostrym smaku
                            <a href="#">Czytaj artykuł</a>
                        </p>
                    </div>
                    <img src="content/header-big-peppers1.png" alt="" />
                </div>

                <div class="item pepers">
                    <div class="caption">
                        <h3>Czerwone papryczki!</h3>
                        <p>
                            Papryka ostra – ogólna nazwa, jaką określa się owoce niektórych odmian, kultywarów i mieszańców papryki (Capsicum) o bardzo ostrym smaku
                            <a href="#">Czytaj artykuł</a>
                        </p>
                    </div>
                    <img src="content/header-big-peppers2.png" alt="" />
                </div>

                <div class="item pepers">
                    <div class="caption">
                        <h3>Czerwone papryczki!</h3>
                        <p>
                            Papryka ostra – ogólna nazwa, jaką określa się owoce niektórych odmian, kultywarów i mieszańców papryki (Capsicum) o bardzo ostrym smaku
                            <a href="#">Czytaj artykuł</a>
                        </p>
                    </div>
                    <img src="content/header-big-peppers3.png" alt="" />
                </div>

                <div class="item pepers">
                    <div class="caption">
                        <h3>Czerwone papryczki!</h3>
                        <p>
                            Papryka ostra – ogólna nazwa, jaką określa się owoce niektórych odmian, kultywarów i mieszańców papryki (Capsicum) o bardzo ostrym smaku
                            <a href="#">Czytaj artykuł</a>
                        </p>
                    </div>
                    <img src="content/header-big-peppers4.png" alt="" />
                </div>
            </div>

            <div class="pagination">
                <ul>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="caption quote">
        <div class="pos-center">
            <blockquote>
                <p>“W gospodarce opartej na wiedzy możemy mieć ciastko, zjeść ciastko i upiec jeszcze trzecie.”</p>
            </blockquote>
        </div>
    </section>

    <div class="gradient">
        <div class="pos-center">&nbsp;</div>
    </div>
</section>

<section id="home" class="content">
    <section class="boxes">
        <div class="pos-center">

            <section class="box first">
                <div class="step1">
                    <h2>Witaj w lovetoeat!</h2>
                    <p>Witaj w świecie prawdziwych kulinarnych inspiracji! Jesteśmy pasjonatami dobrego jedzenia i chcemy w pięknej formie podzielić się z Tobą naszymi zainteresowaniami.</p>
                </div>
            </section>

            <section class="box second">
                <div class="step1">
                    <h2>Przepisy i Dieta</h2>
                    <p>Na lovetoeat.pl znajdziesz między innymi dziesiątki zdrowych przepisów, które przygotowali dla Ciebie nasi dietetycy. Najlepsze przepisy wyślij znajomym!</p>
                </div>
                <div class="step2 hidden">
                    <h2>Ostatnio dodane:</h2>

                    <?php
                    
                    $recips_query = new WP_Query(array(
                        'numbersposts' => 7,
                        'orderby'      => 'post_date',
                        'oreder'       => 'DESC',
                        'post_type'    => 'recipes',
                        'post_status'  => 'publish'
                    ));

                    if($recips_query -> have_posts()) :
                    ?>

                    <ul class="icons-list">
                        <?php while($recips_query->have_posts()) : $recips_query->the_post(); ?>
                        <li class="chicken"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                    </ul>

                    <a href="#">Wszystkie przepisy</a>
                    <?php endif; ?>
                </div>
            </section>

            <section class="box third">
                <div class="step1">
                    <h2>Dobre Restauracje</h2>
                    <p>Odkryj ciekawe miejsca i dowiedz się, które potrawy warto zjeść w restauracjach, które dla Ciebie recenzujemy. Sprawdź restauracje w których bywają Twoi znajomi.</p>
                </div>
                <div class="step2 hidden">
                    <h2>Ostatnio dodane:</h2>
                    <?php
                    
                    $restaurants_query = new WP_Query(array(
                        'numbersposts' => 7,
                        'orderby'      => 'post_date',
                        'oreder'       => 'DESC',
                        'post_type'    => 'restaurants',
                        'post_status'  => 'publish'
                    ));

                    if($restaurants_query -> have_posts()) :
                    ?>

                    <ul class="icons-list">
                        <?php while($restaurants_query->have_posts()) : $restaurants_query->the_post(); ?>
                        <li class="chicken"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                    <a href="#">Wszystkie</a>
                    <?php endif; ?>
                </div>
            </section>

        </div>
    </section>

    <section class="food-fight">
        <div class="pos-center">
            <header>
                <h2>Food Fight</h2>
                <h4>Wszystkie pojedynki</h4>
            </header>

            <div class="opponent good">
                <div class="header">
                    <small>Jedz</small>
                    to!
                </div>
                <div class="details">
                    1.4
                    <small>tłuszcz</small>
                </div>
                <div class="image">
                    <img src="content/food-fight-mcchicken.jpg" alt="" />
                </div>
                <p>Potrawa 1</p>
            </div>

            <div class="opponent bad">
                <div class="header">
                    <small>nie</small>
                    to!
                </div>
                <div class="details">
                    2.1
                    <small>tłuszcz</small>
                </div>
                <div class="image">
                    <img src="content/food-fight-spremium.jpg" alt="" />
                </div>
                <p>Potrawa 2</p>
            </div>
        </div>
    </section>

    <section class="inspirations">
        <div class="pos-center">
            <header>
                <h2>Kulinarne inspiracje</h2>
                <h4>Zobacz wszystkie artykuły</h4>
            </header>

            <div class="slider">
                <a class="prev" href="#">&LeftArrow;</a>
                <div class="slides-container">
                    <div class="items">

                    <?php
                    
                    $recent_recipes_loop = new WP_Query(array(
                        'post_type' 
                    ))
                    
                    ?>


                        <div>
                            <a href="#"><img src="content/home-slider-1.jpg" alt="" /></a>
                            <h2><a href="#">Sałatka z chrupiącym kurczakiem</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed magna orci, eget egestas tellus. Mauris id lectus lorem, et condimentum est. Nam auctor venenatis arcu, eget [...]</p>
                            <a class="more" href="#">...</a>
                        </div>



                    </div>
                </div>
                <a class="next" href="#">&RightArrow;</a>
            </div>

        </div>
    </section>

    <section class="comments">
        <div class="pos-center">
            <header>
                <h2>Poznaj opinie innych</h2>
                <h4><a href="#">Zobacz wszystkie komentarze</a></h4>
            </header>

            <section class="container">
                <span class="flyer">&uArr;</span>

                <?php
                
                    $recent_comms = fetchResentComments(3);

                    foreach ($recent_comms as $comment):
                        $date = new \DateTime($comment->comment_date_gmt);

                ?>

                <section>
                    <header>
                        <small><?php echo $comment->comment_author; ?> w dniu <?php echo $date->format('d.m.Y'); ?></small>
                        <?php echo cutText( $commment->post_title, 27 )?>
                    </header>
                    <?php echo get_avatar( $comment->user_id, 69 ); ?>
                    <blockquote>
                        <?php echo $comment->comment_content; ?>
                    </blockquote>
                </section>

                <?php endforeach; ?>



                <div class="clear"></div>
            </section>
        </div>
    </section>
</section>

<?php get_footer('home'); ?>