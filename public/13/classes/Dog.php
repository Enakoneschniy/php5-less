<?php

class Dog extends Animal{

    public function say_hello(){
        echo $this->name.': Woof-woof!!';
    }
}