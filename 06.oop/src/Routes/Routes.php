<?php

namespace dumb_bird\Routes;

use dumb_bird\Classes\Route;
use dumb_bird\Controllers\GameController;
use dumb_bird\Controllers\IndexController;

class Routes {

  public function run () {
    Route::set('/', function () {
      $IndexOBJ = new IndexController();
      $IndexOBJ->run();
    });

    Route::set('/login', function () {

    });

    Route::set('/game', function () {
      $Game = new GameController();
      $Game->run();
    });
  }


}
