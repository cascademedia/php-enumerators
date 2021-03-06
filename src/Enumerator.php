<?php

namespace Cascade\Enumerator;

interface Enumerator
{
    /**
     * @return EnumeratorValue[]
     */
    public static function getValues();

    /**
     * @param EnumeratorValue $value
     * @return bool
     */
    public static function has(EnumeratorValue $value);
}
