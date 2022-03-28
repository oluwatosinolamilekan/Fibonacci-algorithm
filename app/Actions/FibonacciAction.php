<?php

namespace App\Actions;

class FibonacciAction
{
    public function run()
    {
        $seriesNumber = $this->fibonacciSequence(10);
        $firstNumber = $seriesNumber[0];
        $lastNumber = $seriesNumber[9];
        $limit_random_array_values = range($firstNumber, $lastNumber);
        shuffle($limit_random_array_values);
        return array_slice($limit_random_array_values ,0,3);
    }

    public function fibonacciSequence($n): array
    {
        $result = [];
        // Initialize first and second number to 0 and 1
        $num1 = 0;
        $num2 = 1;
        // initialize counter and set to 0
        $counter = 0;
        // send the flow to iterative while loo[ where we get the next number
        // that starts with 1000 digits and adding the previous two number
        // and simultaneously we swap the first number with the second, and second
        // with third
        while ((strlen($num1) <= strlen($this->getFab1())) && ($counter < $n)){
//            echo ' '.$num1;
            $result[]= $num1;
            $num3 = $num2 + $num1;
            $num1 = $num2;
            $num2 = $num3;
            $counter = $counter + 1;
        }
        return $result;
    }

    function getFibonacci(): \Generator
    {
        $i = '0';
        $k = '1'; //first fibonacci value
        yield $k;
        while(true) {
            // gmp_add to add two gmp number (www.php.net/manual/en/ref.gmp.php)
            $k = gmp_add($i, $k);
            // gmp_subtract to subtract $i from $k
            $i = gmp_sub($k, $i);
            yield $k;
        }
    }

    /*
     * This function finds and print the first fibonacci sequence number
     * with 1000 digits
     */
    function getFab1()
    {
        $value = null;
        //  fibonacci series from getFibonacci2()
        foreach($this->getFibonacci() as $value) {
            // Function breaks with the first 1000 digits
            if (strlen($value) == 1000) {
                break;
            }
        }
        // prints the value
        return $value;
    }
}
