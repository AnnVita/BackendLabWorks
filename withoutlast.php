<?php
    require_once 'include/common.inc.php';
    $str = getParamFromGet('str');
    if (!empty($str))
    {
        echo(withoutLast($str));
    }
    else
    {
        echo('Please, specify some characters in a "message" parameter');
    }