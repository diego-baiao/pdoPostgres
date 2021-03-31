<?php 

namespace Config;

interface IConn{ 
    public function openConn();
    public function statusConn();
    public function closeConn();
}