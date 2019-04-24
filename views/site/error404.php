<?php include ROOT . '/views/layouts/header.php'; ?>
 
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
    <div id="content">
        <h2>Ошибка 404. «Страница не найдена» (Not Found).</h2>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

