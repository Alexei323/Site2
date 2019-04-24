<?php

class UserController
{

    //Отвечает за страницу регистрации пользователя
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $result = false;
        

        if (isset($_POST['submit'])) {
            $name = strip_tags($_POST['name']);
            $email = strip_tags($_POST['email']);
            $password = strip_tags($_POST['password']);

            
            //В переменной храняться ошибки, если данные были введены неправильно
            $errors = false;
            
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }
            
            //Если ошибок нет, обрабатываем форму дальше
            if ($errors == false) {

                //Регистрируем нового пользователя
                $result = User::register($name, $email, $password);
                header("Location: /cabinet/");
            }

        }

        require_once(ROOT . '/views/user/register.php');

        return true;
    }


    public function actionLogin()

    {
        $email = '';
        $password = '';
        
        if (isset($_POST['submit'])) {
            $email = strip_tags($_POST['email']);
            $password = strip_tags($_POST['password']);
            
            $errors = false;
                        
            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);
            
            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);

                // Перенаправляем пользователя в закрытую часть - кабинет 
                header("Location: /cabinet");
            }
        }

        require_once(ROOT . '/views/user/login.php');

        return true;
    }


    //Удаляем данные о пользователе из сессии
    public function actionLogout()
    {   
        session_start();
        unset($_SESSION["user"]);
        header("Location: /");
    }

}

