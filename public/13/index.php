<?php
include_once "init.php";

$zoo = new Zoo();

$zoo->add(new Cat('Мурзик'))
    ->add(new Dog('Хатико'))
    ->add(new Cat('Матильда'))
    ->add(new Dog('Рекс'))
    ->say_hello();

echo "<hr>";

$logger = Logger::get_instance(new DatabaseLogger());

$logger1 = Logger::get_instance(new FileLogger());

$logger2 = Logger::get_instance(new DatabaseLogger());

$logger->log('лалалалалал')
    ->log('sdfsdfsdfsd')
    ->log('esfssdf');

$logger1->log('лалалалалал')
    ->log('sdfsdfsdfsd')
    ->log('esfssdf');

$logger2->log('лалалалалал')
    ->log('sdfsdfsdfsd')
    ->log('esfssdf');
/*
$logger = new Logger(new FileLogger());

$logger->log('лалалалалал')
    ->log('sdfsdfsdfsd')
    ->log('esfssdf');*/