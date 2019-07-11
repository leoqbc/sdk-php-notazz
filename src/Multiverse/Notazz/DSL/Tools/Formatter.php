<?php namespace Multiverse\Notazz\DSL\Tools;

class Formatter
{
    public static function snakeToCamel(string $text)
    {
        $words = explode('_', $text);

        $firstWord = $words[0];

        unset($words[0]);

        foreach ($words as &$word) {
            $word = ucfirst($word);
        }

        return $firstWord . implode('', $words);
    }
}
