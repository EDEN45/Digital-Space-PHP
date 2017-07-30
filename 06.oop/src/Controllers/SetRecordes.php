<?php

namespace dumb_bird\Controllers;

use dumb_bird\Classes\Access;
use dumb_bird\Classes\DB;

class GetRecordes {
  public static function run() {
    $name = Access::Session();

    if ($name) {
      $max = $_POST['max']??null;
      if (!empty($max)) {
        DB::setRecordes($name, $max);
        print_r(DB::getRecordsByName($name));
      }

    }
  }
}
