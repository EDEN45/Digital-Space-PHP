<?php

Route::set('/', function () {
  View::make('Root');
});

Route::set('/login', function () {
  View::make('Login');
});

Route::set('/balance', function () {
  View::make('Balance');
});

?>
