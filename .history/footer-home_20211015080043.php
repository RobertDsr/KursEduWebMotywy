<footer>
    <div class="pos-center">
        <section class="menu">

            <?php
            
            $taxonomies_list = array('ingredients', 'cousine-type', 'meal-type');
            foreach($taxonomies_lis as $taxonomy) :
                $terms_list = get_terms($taxonomy, array(
                    'orderby' => 'count',
                    'hide_empy' => 0,
                    'number' => 5
                ));
            
            ?>

            <ul>
                <?php
                
                foreach()
                
                ?>
            </ul>

        </section>

        <section class="tag-cloud">
            <a href='#' title='2 tematy' style='font-size: 16.5px;'>kurczak</a>
            <a href='#' title='1 temat' style='font-size: 11px;'>makaron</a>
            <a href='#' title='1 temat' style='font-size: 13px;'>pietruszka</a>
            <a href='#' title='1 temat' style='font-size: 11px;'>pomidor</a>
            <a href='#' title='2 tematy' style='font-size: 16.5px;'>sałata</a>
            <a href='#' title='1 temat' style='font-size: 10px;'>warzywa</a>
            <a href='#' title='1 temat' style='font-size: 13px;'>pietruszka</a>
            <a href='#' title='2 tematy' style='font-size: 16.5px;'>kurczak</a>
            <a href='#' title='1 temat' style='font-size: 11px;'>makaron</a>
            <a href='#' title='1 temat' style='font-size: 11px;'>pomidor</a>
            <a href='#' title='2 tematy' style='font-size: 16.5px;'>kurczak</a>
            <a href='#' title='1 temat' style='font-size: 11px;'>makaron</a>
            <a href='#' title='1 temat' style='font-size: 13px;'>pietruszka</a>
        </section>
    </div>
</footer>


</body>

</html>