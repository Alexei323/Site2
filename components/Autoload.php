<?php

// Функция автоматически подключает классы из папок модели и компонетны
function __autoload($class_name)
{
    
    //указали папки в которых могут содержаться классы
    $array_paths = array(
        '/models/',
        '/components/'
    );


    //Проходим циклом по этим папкам и ищем циклом нужный файл
    //Если существует мы его подключаем
    foreach ($array_paths as $path) {
        $path = ROOT . $path . $class_name . '.php';
        if (is_file($path)) {
            include_once $path;
        }
    }
}