<?php

/**
 * 
 * Car Class in Php programming
 * waleed @2022
 * 
 */

include_once 'interface_class.php';

class Cars implements car
{

    public function start_car()
    {
        echo "Car started";
    }
    public function resume_car()
    {
        echo "Car resume";
    }
    public function stop_car()
    {
        echo "Car stop";
    }
}

?>