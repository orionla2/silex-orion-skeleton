<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConfigLoad
 *
 * @author orionla2
 */
class ConfigLoad {
    //put your code here
    public function __construct() {
        
    }
    
    protected function loadControllers($config){
        foreach ($config as $controller => $params) {
            $path = $params['path'];
            $class = $params['class'];
            $app->mount($controller, new \Orion\controllers\main\controller\MainController());
        }
        
    }
}
