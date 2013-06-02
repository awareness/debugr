<?php namespace Awareness\Debugr;

class Debugr {

  public static function dump($data, $exit=true)
  {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    if ($exit) {
      exit;
    }
  }

}