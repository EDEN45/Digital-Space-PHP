<?php

class Route {

  $validRoutes = array();

  public static function set($route, $function) {
    self::$validRoutes[] = $route;

    if ($__GET('url') == $route) {
      function->__invoke();
    }
  }
}

?>
