<?php

class Main {

  # проверка на валидность пути, если он неправильный, то давай до свидания
  public function getRoute() {
    $route = Route::getValidRoutes();
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if (!in_array($uri, $route)) {
      Errors::View();
      die();
    }

    return $uri;
  }

# вход в программу
  public function run() {
    $this->getRoute();
  }
}

?>
