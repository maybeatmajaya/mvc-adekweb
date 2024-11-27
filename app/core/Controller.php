<?php

class Controller {
    public function view($view, $data = [])
    {
    require_once '../app/views/' . $view . '.php';
    
    }

    public function models($model)
    {
        require_once __DIR__ . '/../models/' . $model . '.php';
        return new $model;
    }  
}