<?php


class AdminController extends AdminBase
{
   
   //Страница панели администратора
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();
        // Подключаем вид
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }


    //Вывод неопубликованных объявлений администратору
    public function actionPublic()
    {
    
        // Проверка доступа
        self::checkAdmin();

        $publics = Admin::getPublic();

        // Подключаем вид
        require_once(ROOT . '/views/admin/public.php');
        return true;
    }

    //Администратор разрешает публикацию объвления
    public function actionAdd($str) {

        // Проверка доступа
        self::checkAdmin();

        $admin = new Admin();
        $admin->getAdd($str);

        header("Location: /admin/public/");
    }

    //Администратор удаляет неопубликованное объявление
     public function actionDel($str) {

        // Проверка доступа
        self::checkAdmin();

        $admin = new Admin();
        $admin->getDel($str);

        header("Location: /admin/public/");
    }

}

