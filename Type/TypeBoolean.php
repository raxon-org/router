<?php
/**
 * @author          Remco van der Velde
 * @since           2026-01-28
 * @copyright       (c) Remco van der Velde
 * @license         MIT
 * @version         1.0
 */

namespace Router;

class TypeBoolean {

    public static function validate($string=''): bool
    {
        if(strtolower($string) === 'true'){
            return true;
        }
        elseif(strtolower($string) === 'false'){
            return true;
        }
        return false;
    }

}