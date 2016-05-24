<?php
    function getParamFromGet($param)
    {
        return (empty($_GET[$param])) ? '' : ($_GET[$param]);
    }