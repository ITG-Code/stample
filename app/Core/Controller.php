<?php

class Controller
{

    public function view($view, $data)
    {
        // $data passed into method is now available in this view
        require_once '../app/View/' . $view . '.php';
    }


    public function model($model)
    {
        require_once '../app/Model/' . ucfirst($model) . '.php';

        return new $model();
    }
}