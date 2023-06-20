<?php

class Router{
    private $_uri = array();
    private $_action = array();

    public function add($uri, $action = null){
        if($action !== null){
            $this->_uri[] = '/'.trim($uri, '/');
            $this->_action[] = $action;
        }
    }

    public function run(){
        $url = $_SERVER["REQUEST_URI"];
        $state = false;

        foreach ($this->_uri as $key => $value){
            if (preg_match("#^$value$#", $url)){
                $state = true;
                $action = $this->_action[$key];
                $this->runAction($action);
            }
        }

        if($state === false){ include_once "views/Error.php"; }
    }

    public function runAction($action){
        if($action instanceof \Closure){
            $action();
        }
        else{ include_once('views/Error.php'); }
    }
}