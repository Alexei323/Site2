<?php
class User
{

    // Регистрация пользователя 
   
    public static function register($name, $email, $password)
    {

        $db = Db::getConnection();

        $sql = 'INSERT INTO user (name, email, password) '
                . 'VALUES (:name, :email, :password)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }

  
    //Пользователь редактирует свои данные
    public static function edit($id, $name, $password)
    {
        $db = Db::getConnection();
        
        $sql = "UPDATE user 
            SET name = :name, password = :password 
            WHERE id = :id";
        
        $result = $db->prepare($sql);                                  
        $result->bindParam(':id', $id, PDO::PARAM_INT);       
        $result->bindParam(':name', $name, PDO::PARAM_STR);    
        $result->bindParam(':password', $password, PDO::PARAM_STR); 
        return $result->execute();
    }


    //Проверяем существует ли пользователь с заданными $email и $password
    public static function checkUserData($email, $password)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();

        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }

        return false;
    }


    ///Запоминаем пользователя
    public static function auth($userId)
    {   

        $_SESSION['user'] = $userId;
    }

    public static function checkLogged()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/login");
    }

    //Проверяет гость или нет
    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }


    //Проверяет имя: не меньше, чем 2 символа
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }


    //Проверяет имя: не меньше, чем 6 символов
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }


    //Проверяет email
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }


    public static function checkEmailExists($email)
    {

        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }


    //Возвращат id юзера
    public static function getUserById($id)
    {
        if ($id) {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM user WHERE id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            // Указываем, что хотим получить данные в виде массива
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();


            return $result->fetch();
        }
    }


    //Добавляет новое объявление категории квартиры
    public static function add($userId, $header, $square, $price, $outside, $home, $nomer, $content, $contact) {

        //
        $categoryId = '1';
        $status = '0';
        $date = '24.10.2019';

        $db = Db::getConnection();

        $sql = 'INSERT INTO apartments 
        (id_user, header, square, price, outside, home, nomer, content, contact, category_id, status, date) '
        . 'VALUES 
        (:id_user, :header, :square, :price, :outside, :home, :nomer, :content, :contact, :category_id, :status, :date)';
    

        $result = $db->prepare($sql);
        $result->bindParam(':id_user',      $userId,        PDO::PARAM_STR);
        $result->bindParam(':header',       $header,        PDO::PARAM_STR);
        $result->bindParam(':square',       $square,        PDO::PARAM_STR);
        $result->bindParam(':price',        $price,         PDO::PARAM_STR);
        $result->bindParam(':outside',      $outside,       PDO::PARAM_STR);
        $result->bindParam(':home',         $home,          PDO::PARAM_STR);
        $result->bindParam(':nomer',        $nomer,         PDO::PARAM_STR);
        $result->bindParam(':content',      $content,       PDO::PARAM_STR);
        $result->bindParam(':contact',      $contact,       PDO::PARAM_STR);
        $result->bindParam(':category_id',  $categoryId,    PDO::PARAM_STR);
        $result->bindParam(':status',       $status,        PDO::PARAM_STR);
        $result->bindParam(':date',         $date,          PDO::PARAM_STR);

        return $result->execute();

    }

}       

