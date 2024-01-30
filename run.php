<?php

use Mmalek\EnumTest\SampleEnum;

require_once dirname(__DIR__).'/enum_test/vendor/autoload.php';

$enum = SampleEnum::CRZ2();

dd(
    $enum->testOne(),
    SampleEnum::testTwo($enum),
    SampleEnum::testThree($enum)
);
