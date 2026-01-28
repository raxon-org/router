<?php
/**
 * @author          Remco van der Velde
 * @since           2026-01-28
 * @copyright       (c) Remco van der Velde
 * @license         MIT
 * @version         1.0
 */

namespace Routers;

class TypeArray {

    public static function validate($string=''): bool
    {
        if(
            substr($string, 0, 1) == '[' &&
            substr($string, -1, 1) == ']'
        ){
            $array = json_decode($string, true);
            if(is_array($array)){
                return true;
            }
        }
        return false;
    }

    public static function cast($string=''): array
    {
        $array = json_decode($string, true);
        if(is_array($array)){
            return $array;
        }
        return [];
    }
}