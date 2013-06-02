<?php namespace Awareness\Debugr;

class Debugr {

  /**
   * print_r in <pre> tags
   *
   * @param  mixed
   * @param  bool   if true, exit
   */
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