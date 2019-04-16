<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div id="categoria">
        <div id="menu3">
            <ul>              
                <h3>Пользователь <?php echo $user['name'];?>!</h3>
                <li><a href="/cabinet/locate/">Подать объявление</a></li>
                <li><a href="/cabinet/edit/">Редактировать данные</a></li>              
            </ul>
        </div>
    </div>
</section>

