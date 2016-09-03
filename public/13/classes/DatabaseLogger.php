<?php

class DatabaseLogger implements ILogger{

    public function log($message){
        echo __CLASS__." [".date('H:m:s', time())."]: ".$message."<br>";
    }

    public function get_class(){
        return __CLASS__;
    }
}