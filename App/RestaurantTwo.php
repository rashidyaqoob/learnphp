<?php

namespace App;

class RestaurantTwo implements RestaurantInterface
{
    public function prepareFood()
    {
        echo  '<br><br>' . 'Prepare form Restaurnat Two ' .  '<br><br>';
    }
}
