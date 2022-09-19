<?php

namespace App\Config;

class Variables
{
    public static function getVariables()
    {
        date_default_timezone_set('Europe/Brussels');
        $variables = array(
            'scLang'        =>  'en',
            'scController'  =>  'home',
            'scAction'      =>  'index',
            'scTitle'       =>  'Widepack.be',
            'scSlogan'      =>  'aTest',
            'scCopyright'   =>  '&copy 1996 - ' . date("Y") . ' Widepack.be',
        );
        return $variables;
    }
}
