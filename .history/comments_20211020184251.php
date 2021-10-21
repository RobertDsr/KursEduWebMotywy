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
                                    
                                    wp_list_comments(array)
                                    
                                    ?>

                            <div class="comment parent">
                                <div class="inner">
                                    <img src="content/avatar-janusz.png" alt="">                
                                    <h4>admin w dniu 9 kwietnia 2013 o 10:24 <a href="#">Odpowiedz</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed magna orci, eget egestas tellus. Mauris id lectus lorem, et condimentum est.</p>
                                </div>

                                <div class="comment">

                                    <div class="inner">
                                        <img src="content/avatar-roman.png" alt="">                
                                        <h4>Maćko w dniu 9 kwietnia 2013 o 14:58 <a href="#">Odpowiedz</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed magna orci, eget egestas tellus. Mauris id lectus lorem, et condimentum est.</p>

                                        <div class="comment-awaiting-moderation">Twój komentarz oczekuje na moderację!</div>
                                    </div>

                                </div>
                            </div>

                            <?php else : ?>
                            
                            <p class="no-comments">Ten wpis nie posiada jeszcze żadnych komentrzy.</p>

                            <?php endif; ?>

                        </div>
                        
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