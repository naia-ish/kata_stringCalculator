<?php


namespace App;


class StringCalculator
{

    public function Add(string $string):int
    {
        $sum = 0;

        if ( "" !== $string){
            $re = '/\n/m';
            $subst = ',';

            $result = preg_replace($re, $subst, $string);

            if( !strpos( $result , ',,')) {
                $number = explode(",", $result);

                foreach ($number as $iValue) {
                    $sum += (int)$iValue;
                }
            }
        }

        return $sum;
    }
}