<?php

namespace dumb_bird\Controllers;

use dumb_bird\Classes\Route;


class Page404Controller {
  public function run() {
    if (Route::isRouteValid()) {
      require "src/Views/Page404View.php";
    }
  }
}
