<?php
namespace Stample\Core;
class Controller
{
  private $twigloader;
  private $twig;

  public function __construct()
  {
    $this->twigloader = new \Twig_Loader_Filesystem("../app/view");
    $this->twig = new \Twig_Environment($this->twigloader, [
        'cache' => "../twigcache/",
        'debug' => true,
        'auto_reload' => true,
        'autoescape' => true,

    ]);
  }

  public function view($view, $data)
  {
    echo $this->twig->render($view . ".php", $data);
  }


  public static function model($model)
  {
    $model = '\Stample\Model\\' . $model;
    return new $model();
  }
}