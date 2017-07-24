<?php
/**
 * Описание методов для проверки доступа,
 * а так же для регистрации на сайте
 */

namespace dumb_bird\Classes;

class Access
{
  public static function Session() {

    $name = $_POST['username'] ?? $_SESSION['username'] ?? null;
    $password = $_POST['password'] ?? $_SESSION['password'] ?? null;
    if (empty($name) && empty($password)) {
      return 0;
    }
    else {
      if (DB::getPass($name) === $password) {
        $_SESSION['username'] = $name;
        $_SESSION['password'] = $password;
        return $name;
      }
    }
  }

  public static function SessionExit() {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
  }
}

?>
