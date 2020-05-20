<?php

class Rabbit extends PreyMethod implements Prey{
    
    public function chasedBy(Predator $predator){
        var_dump("im chased by " . get_class($predator));
    }

    public function killBy(Predator $predator){
        var_dump("i was killed " . get_class($predator));
    }
}