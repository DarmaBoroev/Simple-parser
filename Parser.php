<?php

require_once 'ParserInterface.php';
/**
 * @author Darma Boroev <dboroev@gmail.com>
 */
class Parser implements ParserInterface
{
    public function procces(string $url, string $tags): string {
        $content = file_get_contents($url);
        $arrOfTags = explode(',', $tags);
        $num1 = strpos($content, $arrOfTags['0']);
        if ($num1 === false) return "Ничего не найдено";
        $substr1 = substr($content, $num1);
        return substr($substr1, 0, strpos($substr1, $arrOfTags['1']));
    }
}
