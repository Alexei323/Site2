<?php

class ListController
{

    // Выводит каждую категорию, параметром принимает ID категории
    public function actionCategory($categoryId, $page = 1)
    {   

        //Получаем категории для меню 
        $categories = array();
        $categories = Category::getCategoriesList();
        
        //Выводит список объявлений
        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);


        //Количество товаров в текущей категории
        $total = Product::getTotalProductsInCategory($categoryId);

        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

         require_once(ROOT . '/views/catalog/category.php');

         return true;
  }

}
