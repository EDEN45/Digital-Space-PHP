<?php

class Index {
  public static function getArray() {
    $db = new DB();
    return $db->getArray();
  }
}


?>
