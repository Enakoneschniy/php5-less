<?php

class Zoo{
    private  $animals = [];

    public function add(Animal $animal){
        $this->animals[] = $animal;
        return $this;
    }

    public function get_animals(){
        return $this->animals;
    }

    public function say_hello(){
        foreach ($this->animals as $animal){
            $animal->say_hello();
            echo '<br>';
        }
    }
}