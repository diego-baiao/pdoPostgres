<?php 

namespace Config;

interface IConn{ 
    public function connect();
    public static function get();
}