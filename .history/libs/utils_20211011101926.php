<?php


function the_excerpt_max_charlength($charlength) {
    echo cutText(get_the_excerpt(), $charlength);
}

function cutText($text, $maxLength) {
    $maxLength++;

    $return = '';
    if (mb_strlen($text) > )
}

function fetchResentComments($limit = 3) {

}

?>