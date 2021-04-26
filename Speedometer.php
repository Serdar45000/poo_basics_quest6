<?php

class Speedometer
{
    const KM_TO_MILES = 6.21;

    public static function convertKmToMiles(float $value): float
    {
        return $value*self::KM_TO_MILES;
    }

    public static function convertMilesToKm(float $value): float
    {
        return $value/self::KM_TO_MILES;
    }
}