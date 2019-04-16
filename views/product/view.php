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
            <h2>
                <span class="name">
                    <?= $product['header'] ?>-ком. квартира , 
                    <?= $product['square'] ?> кв.м</span>
                <span class="price"> ,  Цена <?= $product['price'] ?> р.
            </h2>
            <h2><p>ул. <?= $product['outside'] ?>, дом <?= $product['home'] ?>  , квартира №<?= $product['nomer'] ?></p></h2>
           <h2><p class="content"> <?= $product['content'] ?></p>
            <p>
                <span class="contact"> <?= $product['contact'] ?></span>
                <span class="user"> user </span>
            </p></h2>
           <h2><p class="date"><?= $product['date'] ?></p></h2>
        </div>
    </div>