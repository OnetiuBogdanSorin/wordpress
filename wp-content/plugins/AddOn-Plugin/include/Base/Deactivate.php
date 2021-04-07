<?php

/**
 * @package AddOn
 */

namespace Book\Base;

class Deactivate
{
    public static function deactivate()
    {
        flush_rewrite_rules();
    }
}



