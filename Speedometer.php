<?php
    
    class Speedometer
    {
        public const KM100 = 100;
        public const MILES100 = 100;
        
        public static function convertKmToMiles($km): float
        {
            return $km / 1.609;
        }
        
        public static function convertMilesToKm($miles): float
        {
            return $miles * 1.609;
        }
        
        public static function convert100kmToMiles(): float
        {
            return self::KM100 / 1.609;
        }
        
        public static function convert100milesToKm(): float
        {
            return self::MILES100 * 1.609;
        }
    }