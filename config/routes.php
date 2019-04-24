<?php

return array(
    
    'product/([0-9]+)' => 'product/view/$1',
    'product' => 'site/error',
    
    'category/([0-9]+)/page-([0-9]+)' => 'list/category/$1/$2',
    'category/([0-9]+)' => 'list/category/$1',  
    'category' => 'site/index/',

    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',

    'cabinet/locate' => 'cabinet/locate',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index', 
    
    'admin/del/([0-9]+)' => 'admin/del/$1',
    'admin/add/([0-9]+)' => 'admin/add/$1',
    'admin/public' => 'admin/public',
    'admin' => 'admin/index',

    '' => 'site/index',
);
