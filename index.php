<?php
require_once 'Parser.php';

$objOfParser = new Parser();
var_dump($objOfParser->procces('http://www.karaoke.ru/artists/goman-aleksej/text/russkij-paren/', 
        "<span class=\"playlist-song-info playlist-song-name\">, </span>"));

