<?php
//funkcje bezpieczeństwa - snippet
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die('Nie możesz bezpośrednio uruchomić tego pliku.');

if (post_password_required()) {
    echo 'Post jest chroniony hasłem. Wprowadź hasło aby zobaczyć komentarze.';
    return;
}
?>


<div class="comments">

<?php if(!comments_open() : ?>
    <?php else : ?>
                        <header>
                            <h2>Komentarze</h2>
                            <h3>Co myślą inni?</h3>
                        </header>

                        <div class="comments-list">

                            <?php if(have_comments()): ?>

                                <?php
                                    
                                    wp_list_comments(array(
                                        'callback' => 'lovetoeat_comment_theme',
                                        'style' => 'div',
                                        'avatar' => 69
                                    ));
                                    
                                    ?>



                            <?php else : ?>
                            
                            <p class="no-comments">Ten wpis nie posiada jeszcze żadnych komentrzy.</p>

                            <?php endif; ?>

                        </div>

                        <?php if(get_comment_pages_count() > 1 && get_option( 'page_comments' )) : 
                        
                        <div class="comments-navi">
                                <div class="prev"><a href="#">← Starsze komentarze</a></div>
                                <div class="next"><a href="#">Nowsze komentarze →</a></div>
                        </div>

                        <div id="respond">

                            <header>
                                <h2>Dodaj komentarz</h2>
                                <h3>Masz jakiś pomysł?</h3>
                            </header>

                            <div class="cancel-comment-reply">
                                <a style="display:none;" href="#" rel="nofollow">Kliknij tutaj, aby anulować odpowiadanie.</a>
                            </div>


                            <form id="commentform" method="post" action="#">

                                <input type="text" name="author" placeholder="Imię i nazwisko">
                                <input type="text" name="email" placeholder="Adres e-mail">

                                <textarea name="comment" placeholder="Treść komentarza"></textarea>

                                <button>Wyślij</button>
                            </form>


                        </div>

                    </div>