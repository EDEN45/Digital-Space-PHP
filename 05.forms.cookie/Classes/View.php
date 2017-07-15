<?php
class View {
  /*
   * Если адрес у нас верный, то запускаем контроллер
   * Если все неправильно, то запускаем контроллер ошибок
   *
  */
  public static function make($view) {

    if (Route::isRouteValid()) {
      require 'Controllers/'.$view.'.php';
      require 'Views/'.$view.'View.php';
    }
  }

}
?>
