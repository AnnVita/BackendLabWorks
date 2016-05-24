<?php
    require_once 'include/common.inc.php';
    $str = getParamFromGet('str');
    echo (!empty($str)) ? removeExtraBlanks($str) : "Please, make some input";