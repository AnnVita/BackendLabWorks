<?php
    require_once 'include/common.inc.php';
    $identifier = getParamFromGet('identifier');
    if (!empty($identifier))
    {
        if (!is_numeric($identifier[0]))
        {
            if (ctype_alnum($identifier))
            {
                echo ("Yes, $identifier is valid identifier");
            }
            else
            {
                echo ("$identifier not an identifier for the rule SR3 because it includes special characters");
            }
        }
        else
        {
            echo ("$identifier not an identifier for the rule SR3 because it begins with numeric character");
        }
    }
    else
    {
        echo('Please, specify some characters in a "message" parameter');
    }