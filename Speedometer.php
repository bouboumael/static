<?php

class Speedometer
{
    private const MILES_TO_KM = 0.621371;

    public static function convertKmtoMiles(float $km): float
    {
        return $km * self::MILES_TO_KM;
    }

    public static function convertMilesToKm(float $miles): float
    {
        return $miles / self::MILES_TO_KM;
    }
}