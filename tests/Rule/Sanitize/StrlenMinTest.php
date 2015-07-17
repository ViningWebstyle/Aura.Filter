<?php

namespace Aura\Filter\Rule\Sanitize;

class StrlenMinTest extends AbstractSanitizeTest
{
    protected $min = 4;

    protected function getArgs()
    {
        return array($this->min);
    }

    public function providerTo()
    {
        return array(
            array(array(), false, array()),
            array('a', true, 'a   '),
            array('abcd', true, 'abcd'),
            array('abcdefg', true, 'abcdefg'),
            array('а', true, 'a   '),
            array('абвг', true, 'абвг'),
            array('абвгдеж', true, 'абвгдеж'),
        );
    }

}
