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
<div id="menu4">
    <div id="menu1">
        <ul>
            <?php foreach ($categories as $categoryItem): ?>                            
                <li>
                    <a id="qwe" href="/category/<?php echo $categoryItem['id']; ?>">
                    <div id=""><?php echo $categoryItem['name']; ?></div>
                    <img src="<?php echo Category::getImage($categoryItem['id']); ?>" alt="" />
                  </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

