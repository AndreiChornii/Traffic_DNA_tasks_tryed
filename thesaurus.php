<?php

class Thesaurus {

    private $thesaurus;

    function Thesaurus($thesaurus) {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms($word) {
        $found_word = 0;
        foreach ($this->thesaurus as $key => $value) {
            if ($key === $word) {
                $found_word = $key;
            }
        }

        if ($found_word) {
            return '{"word":"' . $found_word . '","synonyms":["' . implode('", "', $this->thesaurus[$found_word]) . '"]}';
        } else {
            return '{"word":"' . $word . '","synonyms":[]}';
        }
    }

}

$thesaurus = new Thesaurus(
        array
    (
    "buy" => array("purchase"),
    "big" => array("great", "large")
        ));
echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("agelast");
