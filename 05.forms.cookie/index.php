<?php





# автоматическая загрузка нужных классов

spl_autoload_register(function ($class_name) {

  if (file_exists('classes/'. $class_name . '.php')) {
    require_once 'classes/'. $class_name . '.php';
  }
  elseif (file_exists('Controllers/'. $class_name . '.php')) {
    require_once 'Controllers/'. $class_name . '.php';
  }

});

# отвечает за пути и при первом запуске идет построение путей
require_once ('Routes/Routes.php');

# точка входа приложения
$main = new Main();
$main->run();

?>
