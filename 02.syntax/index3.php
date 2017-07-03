<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 3</title>
    <style type="text/css">
        body {
            background-color: #302683;
        }
        .box-menu {
            width: 300px;
            height: 300px;
            margin: 200px auto;
            border: 5px solid #ffffff;
        }
        .link {
            margin-top: 15px;
            text-align: center;
            text-transform: uppercase;
        }

        a {
            display: inline-block;
            width: 150px;
            padding-top: 5px;
            padding-bottom: 5px;

            color: #ffffff;
            text-decoration: none;
            border: 2px solid #ffffff;
        }

        a:hover {
            border: 2px solid #000000;
        }
    </style>
</head>
<body>
<div class="box-menu">
    <?php
    $menu = [
        'home' => 'Главная',
        'about' => 'О компании',
        'contacts' => 'Контакты',
    ];

    foreach ($menu as $key => $value) {
        print_link($key, $value);
    }

    function print_link($key, $value) {
        echo '<div class="link"><a href="' . $key . '">' . $value . '</a></div>' . "\n";

    }

    ?>
</div>

</body>
</html>


