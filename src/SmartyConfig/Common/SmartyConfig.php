<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/pingxiang-luxi-portal-config/src/SmartyConfig/PxLx',
            S_ROOT.'vendor/qixinyun/pingxiang-luxi-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/pingxiang-luxi-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
