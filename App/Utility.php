<?php
namespace App;

class Utility {
    /**
     * Neatly prints an array
     *
     * Outputs an array surrounded by pre tags for formatting
     * 
     * @param array $array The array to output
     */
    public static function printArr(array $array) 
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
        
    }
}