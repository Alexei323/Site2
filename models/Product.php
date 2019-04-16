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

                    $result = $db->query("SELECT id, header, square, price, outside,
                                        home, nomer, content, contact, date FROM apartments "
                            . "WHERE status = '1' AND category_id = '$categoryId' "
                            . "ORDER BY id ASC "                
                            . "LIMIT ".self::SHOW_BY_DEFAULT
                            . ' OFFSET '. $offset);


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
            
            $result = $db->query('SELECT * FROM apartments WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            return $result->fetch();
        }
    }


    //Находит нужное количество
     public static function getTotalProductsInCategory($categoryId)
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM apartments '
                . 'WHERE status="1" AND category_id ="'.$categoryId.'"');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /**
     * Returns an array of recommended products
     */
    public static function getRecommendedProducts()
    {
        $db = Db::getConnection();

        $productsList = array();

        $result = $db->query('SELECT id, name, price, image, is_new FROM product '
                . 'WHERE status = "1" AND is_recommended = "1"'
                . 'ORDER BY id DESC ');

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }

        return $productsList;
    }

}