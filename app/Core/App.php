<?php
namespace Stample\Core;
class App
{
  private $controller = "home";
  private $method = "index";

  private $param = [];

  public function __construct()
  {
    $url = $this->parseUrl();

    if(file_exists('../app/Controller/' . ucfirst($url[0]) . '.php')) {
      $this->controller = $url[0];
      unset($url[0]);
    }
    $this->controller = "\\Stample\\Controller\\" . ucfirst($this->controller);
    $this->controller = new $this->controller();

    if(isset($url[1])) {
      if(method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }
    $this->param = $url ? array_values($url) : [];

    call_user_func([$this->controller, $this->method], $this->param);
  }

  public function parseUrl()
  {
    if(isset($_GET['url'])) {
      return explode('/',
          filter_var(
              str_replace(" ", "-",
                  trim($_GET['url'], '/')
              )
              , FILTER_SANITIZE_URL
          )
      );
    }
  }


}