<?php

class Dog extends PreyMethod implements Predator, Prey
{
    public function chase(Prey $prey){
        var_dump("im chasing " . get_class($prey));
    }

    public function kill(Prey $prey){
        var_dump("i killed " . get_class($prey));
    }
}