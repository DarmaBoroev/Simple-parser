<?php

/**
 * @author Darma Boroev <dboroev@gmail.com>
 */
interface ParserInterface
{
    /**
     * 
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function procces(string $url, string $tags): string;
}

