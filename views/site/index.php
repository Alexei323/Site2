
<?php include ROOT . '/views/layouts/header.php'; ?>

<body>      
<div id="categoria">
   <div id="menu3">
        <ul>
            <h3>Категории:</h3>
            <?php foreach ($categories as $categoryItem): ?>
               
                <li><a href="/category/<?php echo $categoryItem['id']; ?>">
                    <?php echo $categoryItem['name'];?>
                </a></li>

             <?php endforeach; ?>
        </ul>
    </div>
</div>
<div id="menu4">
    <div id="menu1">
            <ul>
                <a href="/category/1"><li id="img1">Квартиры</li></a>     
                <li id=""><a href="">Автомобили</a></li>            
                <li id=""><a href="">Работа</a></li>
                <li id=""><a href="">Услуги</a></li>
            </ul>
            <ul>
                <li><a href="">Бизнес</a></li>
                <li><a href="">Техника</a></li>
                <li><a href="">Спорт и отдых</a></li>
                <li><a href="">Стройка</a></li>
            </ul>
            <ul>
                <li><a href="">Мебель</a></li>
                <li><a href="">Личные вещи</a></li>
                <li><a href="">Дом и сад</a></li>
                <li><a href="">Разное</a></li>
            </ul>
    </div>
</div>
</body>
</html>


