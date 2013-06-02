<?php namespace Awareness\Debugr;

class Debugr {

  /**
   * print_r in <pre> tags
   *
   * @param  mixed
   * @param  bool   if true, exit
   */
  public function dump($data, $exit=true)
  {
    echo '<pre>'.print_r($data, true).'</pre>';
    if ($exit) {
      exit;
    }
  }

}