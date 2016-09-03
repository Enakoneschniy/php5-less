<?php

class Cat extends Animal{

    public function say_hello(){
        echo $this->name.': Meow-meow!!!';
    }
}