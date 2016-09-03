<?php

class Logger {

    protected $logger;

    protected static $instance = null;

    public static function get_instance(ILogger $logger){
        if(is_null(self::$instance)){
            self::$instance = new self($logger);

            return self::$instance;
        }else{
            if($logger->get_class() !== self::$instance->logger->get_class()){
                self::$instance = new self($logger);
            }
            return self::$instance;
        }
    }

    private function __construct(ILogger $logger){
        $this->logger = $logger;
    }

    public function log($message){
        $this->logger->log($message);
        return $this;
    }

}