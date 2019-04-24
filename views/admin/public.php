<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div id="categoria">
        <div id="menu3">
            <ul>              
                <h3>Админ панель</h3>
                <li><a href="/admin/public/">Неопубликованное</a></li>           
            </ul>
        </div>
    </div>
</section>

<div id="content">
	<h3>Неопубликованные объявления</h3>
    <br><br>
        <?php foreach ($publics as $public): ?>
            <div class="note">
                <a href="/product/<?php echo $public['id'];?>">
                    <span class="name">
                        <?= $public['header'] ?>-ком. квартира , 
                        <?= $public['square'] ?> кв.м</span>
                    <span class="price"> ,  Цена <?= $public['price'] ?> р.
                </a>
                <p>ул. <?= $public['outside'] ?>, дом <?= $public['home'] ?>  , квартира №<?= $public['nomer'] ?></p>
                <p class="content"> <?= $public['content'] ?></p>
                <p>
                    <span class="contact"> <?= $public['contact'] ?></span>
                </p>
                <p class="date"><?= $public['date'] ?></p>
            </div>
            <div>
            	 <a href="/admin/add/<?php echo $public['id'];?>">Добавить на сайт</a><br><br>
            	 <a href="/admin/del/<?php echo $public['id'];?>">Удалить</a>
            </div>
                <br>
                <br>
                    <div id="lin"></div>
                <br>
        <?php endforeach; ?>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
