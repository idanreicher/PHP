<?php

interface Prey{

    public function chasedBy(Predator $predator);
    public function killedBy(Predator $predator);
}