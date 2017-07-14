<?php

class DB {
  private static $menu_array = [

        '/login' => ['Вход','Войдите чтобы просмотреть баланс'],
        '/balance' => ['Баланс','Чтобы просмотреть баланс необходимо пройти авторизацию'],
        '/' => ['Главная страница','Чтобы просмотреть баланс необходимо пройти авторизацию'],
  ];

  private static $user_array = [
    'Андрей' => ['1234',453],
    'Вася' => ['2244', 23],
    'Алина' => ['991', 1]
  ];


  public static function getArray() {
    return self::$menu_array;
  }

  public static function getUserBalanc($login, $password) {
    foreach (self::$user_array as $key => $value) {
      if ($login === $key && $password === $value[0]){
        return $user_array[key][1];
      }
    }
  }
}

?>
