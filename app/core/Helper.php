<?php

class Helper
{
    // keby tu nebolo static
    // $helper = new Helper()
    // $helper->getPageTitile()
    //staticku volam takto
    // Helper::getPageTitle()
    public static function getPageTitle(): string
    {
        $script = $_SERVER['SCRIPT_NAME'];
        $page = ucfirst(basename($script, '.php'));
        return 'TechBlog - ' . $page;
    }

}