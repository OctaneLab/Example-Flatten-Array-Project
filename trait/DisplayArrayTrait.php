<?php

trait DisplayArrayTrait
{
    /**
     * Static function to display an array (may be placed as a styled table of code in future, who knows..)
     * We could create an abstract class to decorate the display as a decorator pattern later on.
     *
     * @param array $inputArray
     * @param bool $flat
     */
    public static function display($inputArray = [], $flat = false)
    {
        if($flat){
            print_r($inputArray);
        }else{
            echo '<pre>';
            print_r($inputArray);
            echo '</pre>';
        }
    }
}