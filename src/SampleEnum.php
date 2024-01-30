<?php

namespace Mmalek\EnumTest;

use MyCLabs\Enum\Enum;
use UnexpectedValueException;

/**
 * @extends Enum<Enum>
 *
 * @method static SampleEnum OLYMPUS()
 * @method static SampleEnum CLIO()
 * @method static SampleEnum CRZ2()
*/
class SampleEnum extends Enum
{
    public const OLYMPUS = 'OLYMPUS';
    public const CLIO = 'CLIO';
    public const CRZ2 = 'CRZ2';


    public function testOne(): string
    {
        return match($this->getValue()){
            self::CLIO => 'clio_in',
            self::CRZ2 => 'crz_in',
            default => throw new UnexpectedValueException('Brak zdefiniowanego transportu dla systemu'),
        };
    }

    public static function testTwo(self $value): string
    {
        return match ($value->value) {
            self::CLIO()->value => 'clio_in',
            self::CRZ2()->value => 'crz_in',
            default => 'kaszanka!'
        };
    }

    public static function testThree(self $value): string
    {
        switch ($value) {
            case self::CLIO() :
                return 'clio_in';
            case self::CRZ2() :
                return 'crz_in';
            default :
                return 'kaszanka';
        }

    }

}
