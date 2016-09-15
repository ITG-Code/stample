<?php
namespace Stample\Core;
use Stample\Helpers\Session;

class Controller
{
  private $twigloader;
  private $twig;
  protected $user;

  public function __construct()
  {
    $this->user = $this->model('User');
    $this->user->prepare();

    $this->twigloader = new \Twig_Loader_Filesystem("../app/View");
    $this->twig = new \Twig_Environment($this->twigloader, [
        //'cache' => "../twigcache/",
        'debug' => true,
        'auto_reload' => true,
        'autoescape' => false,

    ]);
    $this->twig->addExtension(new \Twig_Extension_Debug());
  }

  public function view($view, $data)
  {
    $data['skin'] = Session::get('skin') == 'darkly' ? Session::get('skin') : 'flatly' ;
    echo $this->twig->render($view . ".twig", $data);
  }


  public static function model($model)
  {
    $model = '\Stample\Model\\' . $model;
    return new $model();
  }
}