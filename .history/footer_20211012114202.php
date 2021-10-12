<footer class="boxes">
            <div class="pos-center">
                <div class="flyer">&nbsp;</div>
                <section class="spaghetti">
                    <h2>Przepisy i Dieta</h2>
                    <ul>
                        <?php
                        
                            $przepisy = new WP_Query( array(
                                'post_type' => 'recipes',
                                'posts_per_page' => 5
                            ) );

                            
                        
                        ?>
                    </ul>
                </section>

                <section class="bread">
                    <h2>Food Fight</h2>
                    <ul>
                        <li><a href="#">Cheeseburger vs Hambuger</a></li>
                        <li><a href="#">Subway Panini vs Zapiekanka</a></li>
                        <li><a href="#">McChicken vs Tortilla Deluxe</a></li>
                        <li><a href="#">Cheeseburger vs Hambuger</a></li>
                        <li><a href="#">Subway Panini vs Zapiekanka</a></li>
                    </ul>
                </section>

                <section class="dinner last">
                    <h2>Restauracje</h2>
                    <ul>
                        <li><a href="#">Restauracja Da Pietro</a></li>
                        <li><a href="#">Miód Malina</a></li>
                        <li><a href="#">Trattoria Mamma Mia</a></li>
                        <li><a href="#">Pod Wawelem</a></li>
                        <li><a href="#">Trattoria Mamma Mia</a></li>
                    </ul>
                </section>
            </div>
        </footer>
        
    </body>
</html>