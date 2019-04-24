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

    public function actionError() 
    {	
        $categories = array();
        $categories = Category::getCategoriesList();
    	require_once(ROOT . '/views/site/error404.php');

        return true;
    }

}
