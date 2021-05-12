<?php


namespace App;


class StringCalculator
{

    public function Add(string $string):int
    {
        $sum = 0;

        if ( "" !== $string){
            $number = explode(",", $string);

            for($i = 0, $iMax = count($number); $i < $iMax; $i++ ){
                $sum += (int) $number[$i];
            }
        }

        return $sum;
    }
}