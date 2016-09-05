<?php
namespace Stample\Helpers;
class Redirect
{
  public static function to($link)
  {
    header('Location:/public' . $link);
    exit();
  }
}