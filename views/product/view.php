<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="categoria">
   <div id="menu3">
        <ul>
            <h3>Категории:</h3>
            <?php foreach ($categories as $categoryItem): ?>
               
                <li><a href="/category/<?php echo $categoryItem['id']; ?>"
                    class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>">
                    <?php echo $categoryItem['name'];?>
                </a></li>

             <?php endforeach; ?>
        </ul>
    </div>
</div>

<div id="content">
    <br><br>
        <div class="note">
            <div class="product">
                <div class="product_header">
                    <p>
                        <?= $product['header'] ?>-ком. квартира , 
                        <?= $product['square'] ?> кв.м,  Цена <?= $product['price'] ?> р.
                    </p>
                </div>
                <p>
                    ул. <?= $product['outside'] ?>,
                    дом <?= $product['home'] ?>  , 
                    квартира №<?= $product['nomer'] ?>            
                </p>
                <p><?= $product['content'] ?></p>
                <p><?= $product['contact'] ?></p>
                <p><?= $product['date'] ?></p>
            </div>
        </div>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
