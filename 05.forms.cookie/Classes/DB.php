<?php

class DB {
  private static $menu_array = [

        '/login' => ['Вход','Войдите чтобы просмотреть баланс'],
        '/balance' => ['Баланс','Чтобы просмотреть баланс необходимо пройти авторизацию'],
        '/' => ['Главная страница','Чтобы просмотреть баланс необходимо пройти авторизацию'],
  ];

  private static $user_array = [
     ['Андрей','1234',453],
     ['Вася','2244', 23],
     ['Алина','991', 1]
  ];


  public static function getArray() {
    return self::$menu_array;
  }

  public static function getPass($name) {
    foreach (self::$user_array as $key => $value) {
      if ($name === $value[0]){
        return $user_array[key][2];
      }
    }
  }

  public static function getBalance($name) {
    foreach (self::$user_array as $key => $value) {
      if ($name === $value[0]){
        return $user_array[key][3];
      }
    }
  }

}

?>
