<?php

class Palindrome {

    public static function isPalindrome($word) {
        $lower_word = strtolower($word);

        $arr_begin = [];
        $arr_end = [];
        for ($i = 0; $i < round(strlen($lower_word) / 2, 0, PHP_ROUND_HALF_DOWN); $i++) {
            $arr_begin[$i] = $lower_word[$i];
            $arr_end[$i] = $lower_word[strlen($lower_word) - 1 - $i];
        }

        $is_equal = 1;
        for ($i = 0; $i < count($arr_begin); $i++) {
            if ($arr_begin[$i] !== $arr_end[$i]) {
                $is_equal = 0;
            }
        }

        if ($is_equal) {
            return "palindrom";
        } else {
            return "not_palindrom";
        }
    }

}

echo Palindrome::isPalindrome('Deleveled');
