<?php
/**
 * @author          Remco van der Velde
 * @since           2026-01-28
 * @copyright       (c) Remco van der Velde
 * @license         MIT
 * @version         1.0
 */

namespace Router;

class TypeObject {

    public static function validate($string=''): bool
    {
        if(
            substr($string, 0, 1) == '{' &&
            substr($string, -1, 1) == '}'
        ){
            $object = json_decode($string);
            if(is_object($object)){
                return true;
            }
        }
        return false;
    }

    public static function cast($string=''): object
    {
        $object = json_decode($string);
        if(is_object($object)){
            return $object;
        }
        return (object) [];
    }
}