<?php

$array_menu = [
    'task1' => ['Задание 1','Генерация случайного массива заданной длины, не более 10 элементов и вывод
                    максимального и минимального элемента<br><br>
                    <b>Если хотите сгенерировать массив, то перейдите по ссылке:</b><br>
                    <a href="/task1?n=9">Получить маассив</a>'],
    'task2' => ['Задание 2','Вывод таблицы умножения<br>
                                <a href="task2?n=9">Создать таблицу умножения</a> '],
    'task3' => ['Задание 3','Уже реализовано на этом сайте'],
];

function main_page($menu) {
    require 'template/main-page.php';
}

function page_not_found($menu) {
    require 'template/404.php';
}

function task($menu, $level, $param) {
    $array_task1 = [];
    if ($level === 'task1' && !empty($param)) {
        
        for ($i = 0; $i < $param; $i++) {
            $array_task1[$i] = rand(-56, 30);
        }

        require 'template/task.php';
        
    } elseif ($level === 'task2') {
        
        require 'template/task.php';
    } else {
      require 'template/task.php';
    }
    
}
