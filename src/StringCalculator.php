<?php


namespace App;


class StringCalculator
{

    public function Add(string $string):int
    {
        $sum = 0;

        if( 1 === strlen($string) ) {
            $sum = (int) $string;
        } elseif ( 3 === strlen($string)) {
            $number = explode(",", $string);
            
            $sum += (int) $number[0] + (int) $number[1];
        }

        return $sum;
    }
}