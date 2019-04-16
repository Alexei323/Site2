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
        <?php foreach ($categoryProducts as $product): ?>
            <div class="note">
                <a href="/product/<?php echo $product['id'];?>">
                    <span class="name">
                        <?= $product['header'] ?>-ком. квартира , 
                        <?= $product['square'] ?> кв.м</span>
                    <span class="price"> ,  Цена <?= $product['price'] ?> р.
                </a>
                <p>ул. <?= $product['outside'] ?>, дом <?= $product['home'] ?>  , квартира №<?= $product['nomer'] ?></p>
                <p class="content"> <?= $product['content'] ?></p>
                <p>
                    <span class="contact"> <?= $product['contact'] ?></span>
                    <span class="user"> user </span>
                </p>
                <p class="date"><?= $product['date'] ?></p>
            </div>
                <br>
                    <div id="lin"></div>
                <br>
        <?php endforeach; ?>

        <?php echo $pagination->get(); ?>
    </div>