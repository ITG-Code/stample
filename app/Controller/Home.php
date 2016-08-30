<?php

class Home extends Controller
{
    public function __construct()
    {
    }

    public function index($args){

        $this->model('user');
    }
}