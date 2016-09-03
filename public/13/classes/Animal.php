<?php

abstract class Animal{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public abstract function say_hello();

}