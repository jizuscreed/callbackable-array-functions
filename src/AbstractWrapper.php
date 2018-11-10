<?php

namespace jizuscreed\CallbackableArrayFunctions;
/**
 * Class AbstractWrapper
 *
 * Abstract wrapper that implementing common functionality for every wrapper
 *
 * @package jizuscreed\CallbackableArrayFunctions
 */
abstract class AbstractWrapper
{
    abstract static public function run(array $array, Callable $stringer) : array;

    /**
     * Preparing array - wraps its values to stringable decorator
     * @param array $array
     * @param callable $stringer
     * @return array
     */
    protected final static function wrapArray(array $array, Callable $stringer) : array
    {
        // loop over array and wrap every value into a stringable decorator
        foreach($array as &$value){
            $value = new StringableDecorator($value, $stringer);
        }

        return $array;
    }

    /**
     * un wrap array after processing to return original non-decorated values
     * @param array $array
     * @return array
     */
    protected final static function unWrapArray(array $array) : array
    {
        foreach($array as &$value){
            $value = $value->getOriginalVariable();
        }
        return $array;
    }
}