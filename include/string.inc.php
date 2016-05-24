<?php
    function last($str)
    {
        return (strlen($str) > -1) ? $str[strlen($str) - 1] : '';
    }
    function withoutLast($str)
    {
        return (strlen($str) > -1) ? substr($str, 0, (strlen($str) - 1)) : '';
    }
    function reverse($str)
    {
        if (strlen($str) > -1) 
        {
            for ($beginIndex = 0, $endIndex = (strlen($str) - 1); $endIndex >= $beginIndex ; $beginIndex++, $endIndex--)
            {
                list($str[$beginIndex], $str[$endIndex]) = array($str[$endIndex], $str[$beginIndex]);
            }
        }
        else
        {
            $str = '';
        }
        return $str;
    }
    function removeExtraBlanks($str)
    {
        $space = '_';
        $str = preg_replace("/\\s+/", " ", $str); 
        $str = trim($str); 
        return $str;
    }
    