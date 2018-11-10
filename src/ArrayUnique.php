<?php

namespace jizuscreed\CallbackableArrayFunctions;

/**
 * Class ArrayUnique
 * @package jizuscreed\CallbackableArrayFunctions
 */
class ArrayUnique extends AbstractWrapper
{
    public static function run(array $array, Callable $stringer): array
    {
        $array = static::wrapArray($array, $stringer);
        $array = array_unique($array);
        return static::unWrapArray($array);
    }
}