<?php

namespace BinaryCabin\NanoUnits;

class NanoUnits{

    public static function getRawExponents(){
        return [
            'Gnano' => 33,
            'ticker' => 30,
            'Mnano' => 30,
            'knano' => 27,
            'nano' => 24,
            'mnano' => 21,
            'unano' => 18,
            'raw' => 0,
        ];
    }

    public static function convert($inputUnit,$outputUnit,$value){
        $inputUnitExponent = static::getRawExponents()[$inputUnit];
        $outputUnitExponent = static::getRawExponents()[$outputUnit];
        $remainderExponent = $inputUnitExponent-$outputUnitExponent;
        $multiplier = pow(10,$remainderExponent);
        return $value * $multiplier;
    }

}