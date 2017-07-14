<?php
/**
 * Описание методов для проверки доступа,
 * а так же для регистрации на сайте
 */
class Access
{
  public static function Session() {
    session_start();
    $name = $_GET['username'] ?? $_SESSION['username'] ?? null;
    $pasword = $_GET['password'] ?? $_SESSION['password'] ?? null;

    if (!empty($name) && !empty($password)) {
      if (DB::getPass($name) === $password) {
        return $name;
      }

    }

    return 0;
  }
}

?>
