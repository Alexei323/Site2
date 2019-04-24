<?php

class Category
{

    //Модель для категорий
    public static function getCategoriesList()
    {

        $db = Db::getConnection();

        $categoryList = array();

        $sql = "SELECT id, name FROM category
                ORDER BY sort_order ASC";
                  
        $result = $db->prepare($sql);
        $result->execute();


        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }

        return $categoryList;
    }


    //Выводит картинку для категории.
    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-image.png';
        // Путь к папке с товарами
        $path = '/template/img/';
        // Путь к изображению
        $pathToCategoriaImage = $path . $id . '.png';
        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToCategoriaImage)) {
            // Если изображение существует
            // Возвращаем путь 
            return $pathToCategoriaImage;
        }
        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }

}
