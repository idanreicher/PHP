<?php

abstract class PreyMethod 
{
    public function chasedBy(Predator $predator)
    {   
        var_dump('im chased by '. get_class($predator));
        
    }

    public function killedBy(Predator $predator)
    {
        $obj = new static;
        var_dump(get_class($obj) . ' was killed by '. get_class($predator));
    }
}