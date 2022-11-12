<?php

class Speedometer
{
    public const CONVERTER = 1.609;
    public static function convertKmToMiles(int $kilometers)
    {
        return $kilometers / self::CONVERTER;
    }
    public static function convertMilestoKm($miles)
    {
        return $miles * self::CONVERTER;
    }
}
