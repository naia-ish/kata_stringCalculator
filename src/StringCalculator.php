<?php


namespace App;


class StringCalculator
{

    public function Add(string $string):int
    {
        $sum = 0;

        if( 1 === strlen($string) ) {
            $sum = (int) $string;
        }

        return $sum;
    }
}