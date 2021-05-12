<?php


namespace App;


class StringCalculator
{

    public function Add(string $string):int
    {
        $sum = 0;

        if ( "" !== $string){

            if(1 === preg_match("/^(\/\/[!\"#$%&'*+,.\/:;=?@^_`|~-]\n\d)/", $string)){

                $delimiter = $string[2];

                $sum = $this->explodeString($sum,$delimiter,$string);
            } else {
                $re = '/\n/m';
                $subst = ',';

                $result = preg_replace($re, $subst, $string);

                if( !strpos( $result , ',,')) {

                    $sum = $this->explodeString($sum,",",$result);
                }
            }

        }

        return $sum;
    }

    public function explodeString(int $sum, string $delimiter, string $string): int
    {
        $number = explode($delimiter, $string);

        if( !is_null( $number ) ) {
            foreach ($number as $value){
                $sum += (int) $value;
            }
        }

        return $sum;
    }
}