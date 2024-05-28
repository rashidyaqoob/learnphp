<?php

namespace App;

class RestaurantOne implements RestaurantInterface
{
    public function prepareFood()
    {
        echo  '<br><br>' . 'Preparing food ' . '<br><br>';
    }
}
