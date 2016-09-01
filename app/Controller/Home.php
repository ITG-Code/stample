<?php
namespace Stample\Controller;

use \Stample\Core\Controller;

class Home extends Controller
{
    public function __construct()
    {
    }

    public function index($args = [])
    {

        $this->model('user');

        $this->view('home/index', []);
    }
}