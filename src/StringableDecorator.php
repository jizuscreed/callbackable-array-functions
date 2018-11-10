<?php

namespace jizuscreed\CallbackableArrayFunctions;
/**
 * Class StringableDecorator
 *
 * Decorator to make every variable stringable with callback
 *
 * @package jizuscreed\CallbackableArrayFunctions
 */
class StringableDecorator
{
    /**
     * @var Callable $stringer
     */
    protected $stringer;
    protected $variable;

    /**
     * StringableDecorator constructor.
     * @param $variable
     * @param callable $stringer
     */
    public function __construct($variable, Callable $stringer)
    {
        $this->stringer = $stringer;
        $this->variable = $variable;
    }

    /**
     * @return mixed
     */
    public function getOriginalVariable()
    {
        return $this->variable;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return ($this->stringer)($this->variable);
    }
}