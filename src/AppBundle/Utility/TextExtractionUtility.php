<?php

namespace AppBundle\Utility;

class TextExtractionUtility
{

    /**
     * 
     * @param type $html text to extract words from
     * @param type $max
     * @return type
     */
    public function extract_keywords($html, $max = 20)
    {

        $ouws = new OverUsedWordsDict();

        $overusedwords = $ouws->getWords();
        // strip tags and html entities
        $text = preg_replace('/&(#x[0-9a-f]+|#[0-9]+|[a-zA-Z]+);/', '', strip_tags($html));

        $softhyphen = html_entity_decode('&#173;', ENT_NOQUOTES, 'UTF-8');
        $text = str_replace($softhyphen, '', $text);

        $wordlist = preg_split('%\s*\W+\s*%', strtolower($text));

        // Build an array of the unique words and number of times they occur.
        $tokens = array_count_values($wordlist);

        // Remove the stop words from the list.
        //$overusedwords = apply_filters( 'yarpp_keywords_overused_words', $overusedwords );

        if (is_array($overusedwords)) {
            foreach ($overusedwords as $word) {
                unset($tokens[$word]);
            }
        }
        // Remove words which are only a letter
        foreach (array_keys($tokens) as $word) {
            if (strlen($word) < 2)
                unset($tokens[$word]);
        }

        arsort($tokens, SORT_NUMERIC);

        $types = array_keys($tokens);

        if (count($types) > $max)
            $types = array_slice($types, 0, $max);
        return implode(' ', $types);
    }

}
