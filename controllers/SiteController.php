<?php

class SiteController
{

    public function actionIndex()
    {

    	//Выводит меню категорий
        $categories = array();
        $categories = Category::getCategoriesList();

        require_once(ROOT . '/views/site/index.php');

        return true;
    }

}