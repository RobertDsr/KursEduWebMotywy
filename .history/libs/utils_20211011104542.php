<?php


function the_excerpt_max_charlength($charlength) {
    echo cutText(get_the_excerpt(), $charlength);
}

function cutText($text, $maxLength) {
    $maxLength++;

    $return = '';
    if (mb_strlen($text) > $maxLength) {
        $subex = mb_substr($text, 0, $maxLength - 5);
        $exwords = explode('  ', $subex);
        $excut = - (mb_substr($exwords[count($exwords) - 1]));
        if ($excut < 0) {
            $return = mb_substr($subex, 0, $excut);
        } else {
            $return = $subex;
        }
        $return .
        }
        }
    }
}

function fetchResentComments($limit = 3) {

}

?>