<?php


function the_excerpt_max_charlength($charlength) {
    echo cutText(get_the_excerpt(), $charlength);
}

function cutText($text, $maxLength) {
    $maxLength++;

    $return = '';
    if (mb_strlen($text) > $maxLength) {
        $subex
    }
}

function fetchResentComments($limit = 3) {

}

?>