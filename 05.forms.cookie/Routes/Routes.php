<?php

Route::set('/', function () {
  View::make('Index');
});

Route::set('/login', function () {
  # старт сессии
  session_start();
  View::make('Login');
});

Route::set('/out', function () {
  Access::SessionExit();
  header('Location: /');
});

Route::set('/balance', function () {
  View::make('Balance');
});

?>
