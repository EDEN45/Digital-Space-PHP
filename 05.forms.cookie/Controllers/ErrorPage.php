<?php

class ErrorPage {
  public static function View() {

    $header_error = '404 Page not found';
    require 'Views/ErrorPageView.php';
  }
}


?>
