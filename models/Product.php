<?php

class Product
{
    //Количество объвлений на одной странице
    const SHOW_BY_DEFAULT = 4;

        //Выводит объявления из базы данных
         public static function getProductsListByCategory($categoryId = false, $page = 1)
            {
                if ($categoryId) {
                    
                    $page = intval($page);            
                    $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
                
                    $db = Db::getConnection();            
                    $products = array();

                    $sql = "SELECT id, header, square, price, outside,
                                        home, nomer, content, contact, date FROM apartments "
                            . "WHERE status = 1 AND category_id = :categoryId 
                               ORDER BY id ASC  
                               LIMIT :limit
                               OFFSET :offset";
                              
                    $result = $db->prepare($sql);
                    $result->bindValue(':categoryId', $categoryId, \PDO::PARAM_INT);
                    $result->bindValue(':offset', $offset, \PDO::PARAM_INT);
                    $result->bindValue(':limit', self::SHOW_BY_DEFAULT, \PDO::PARAM_INT);
                    $result->execute();


                $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['header'] = $row['header'];
                $products[$i]['square'] = $row['square'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['outside'] = $row['outside'];
                $products[$i]['home'] = $row['home'];
                $products[$i]['nomer'] = $row['nomer'];
                $products[$i]['content'] = $row['content'];
                $products[$i]['contact'] = $row['contact'];
                $products[$i]['date'] = $row['date'];
                $i++;
            }    
            return $products;  

                }
            }

    
    //Выводит объявление на отдельной странице
    public static function getProductById($id)
    {
        $id = intval($id);

        if ($id) {                        
            $db = Db::getConnection();

            $sql = "SELECT * FROM apartments WHERE id = :id";
                  
            $result = $db->prepare($sql);
            $result->bindValue(':id', $id, \PDO::PARAM_INT);
            $result->execute();

            return $result->fetch();
        }
    }


    //Находит нужное количество объявлений в категории.
     public static function getTotalProductsInCategory($categoryId)
    {
        $db = Db::getConnection();

        $sql = "SELECT count(id) AS count FROM apartments 
                WHERE status='1' AND category_id = :categoryId";
                  
        $result = $db->prepare($sql);
        $result->bindValue(':categoryId', $categoryId, \PDO::PARAM_INT);
        $result->execute();

        $row = $result->fetch();

        return $row['count'];
    }


}
