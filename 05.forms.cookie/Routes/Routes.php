<?php

Route::set('/', function () {
  View::make('Index');
});

Route::set('/login', function () {
  View::make('Login');
});

Route::set('/balance', function () {
  View::make('Balance');
});

?>
