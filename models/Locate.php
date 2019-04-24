<?php 

class Locate {
//Добавляет новое объявление категории квартиры
    public static function add($userId, $header, $square, $price, $outside, $home, $nomer, $content, $contact) {

        $categoryId = '1';
        $status = '0';
        $date = date('d.m.Y');

        $db = Db::getConnection();

        $sql = 'INSERT INTO apartments 
        (id_user, header, square, price, outside, home, nomer, content, contact, category_id, status, date) '
        . 'VALUES 
        (:id_user, :header, :square, :price, :outside, :home, :nomer, :content, :contact, :category_id, :status, :date)';
    
        $result = $db->prepare($sql);
        $result->bindParam(':id_user', $userId, PDO::PARAM_STR);
        $result->bindParam(':header', $header, PDO::PARAM_STR);
        $result->bindParam(':square', $square, PDO::PARAM_STR);
        $result->bindParam(':price', $price, PDO::PARAM_STR);
        $result->bindParam(':outside', $outside, PDO::PARAM_STR);
        $result->bindParam(':home', $home, PDO::PARAM_STR);
        $result->bindParam(':nomer', $nomer, PDO::PARAM_STR);
        $result->bindParam(':content', $content, PDO::PARAM_STR);
        $result->bindParam(':contact', $contact, PDO::PARAM_STR);
        $result->bindParam(':category_id', $categoryId, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_STR);
        $result->bindParam(':date', $date, PDO::PARAM_STR);

        return $result->execute();

    }
}