<?php

class CabinetController
{

    public function actionIndex()
    {
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        
         //Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);
                
        require_once(ROOT . '/views/cabinet/index.php');

        return true;
    }  
    

    //Пользователь редактирует свои данные
    public function actionEdit()
    {
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        
        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);
        
        $name = $user['name'];
        $password = $user['password'];
                
        $result = false;     

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
            
            $errors = false;
            
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            if ($errors == false) {
                $result = User::edit($userId, $name, $password);
            }

        }

        require_once(ROOT . '/views/cabinet/edit.php');

        return true;
    }

    //Пользователь добавляет объявление.
    public function actionLocate() {

        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();

        $header = '';
        $square = '';
        $price = '';
        $outside = '';
        $home = '';
        $nomer = '';
        $content = '';
        $contact = '';
        $result = false;


         if (isset($_POST['submit'])) {
            $header = $_POST['header'];
            $square = $_POST['square'];
            $price = $_POST['price'];
            $outside = $_POST['outside'];
            $home = $_POST['home'];
            $nomer = $_POST['nomer'];
            $content = $_POST['content'];
            $contact = $_POST['contact'];

            
            //В переменной храняться ошибки, если данные были введены неправильно
            $errors = false;
            
            if (!$square) {
                $errors[] = 'Укажите площадь';
            }

            if (!$price) {
                $errors[] = 'Укажите цену';
            }

            if (!$outside) {
                $errors[] = 'Укажите улицу';
            }

            if (!$home) {
                $errors[] = 'Укажите номер дома';
            }

            if (!$nomer) {
                $errors[] = 'Укажите номер квартиры';
            }
            
            if (!$content) {
                $errors[] = 'Укажите описание';
            }

            if (!$contact) {
                $errors[] = 'Укажите номер телефона';
            }
            
            
            //Если ошибок нет, обрабатываем форму дальше
            if ($errors == false) {

                //Добавляем объявление
                $result = User::add($userId, $header, $square, $price, $outside,
                                    $home, $nomer, $content, $contact);
            }

        }

        require_once(ROOT . '/views/cabinet/locate.php');
        return true;
    }


}