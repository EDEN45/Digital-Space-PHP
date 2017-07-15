<?php

class DB {
  private static $menu_array = [
        '/' => ['Главная страница','Чтобы просмотреть баланс необходимо пройти авторизацию'],
        '/login' => ['Вход','Войдите чтобы просмотреть баланс']
  ];

  private static $user_array = [
     ['Андрей','1234', '432'],
     ['Вася','2244', '23'],
     ['Алина','991', '89'],
     ['9','9', '1']
  ];


  public static function getArray() {
    return self::$menu_array;
  }

  public static function getPass($name) {
    foreach (self::$user_array as $key => $value) {
      if ($name === $value[0]){
        return $value[1];
      }
    }
  }

  public static function getBalance($name) {
    foreach (self::$user_array as $key => $value) {
      if ($name === $value[0]){
        return $value[2];
      }
    }
  }

}

?>
