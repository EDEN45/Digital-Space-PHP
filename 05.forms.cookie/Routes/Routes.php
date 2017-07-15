<?php

Route::set('/', function () {
  View::make('Index');
});

Route::set('/login', function () {
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
