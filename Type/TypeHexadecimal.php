<?php
/**
 * @author          Remco van der Velde
 * @since           2026-01-28
 * @copyright       (c) Remco van der Velde
 * @license         MIT
 * @version         1.0
 */

namespace Router;

class TypeHexadecimal {

    public static function validate($string=''): bool
    {
        if(strtolower($string) == 'nan'){
            $string = NAN;
        }
        return ctype_xdigit($string);
    }

}