<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div id="categoria">
        <div id="menu3">
            <ul>

                <h3>Пользователь <?php echo $user['name'];?>!</h3>
                <?php if ($user['role'] == 'admin'): ?>
					<li><a href="/admin/">Панель управления</a></li>
				<?php endif; ?>     
                <li><a href="/cabinet/locate/">Подать объявление</a></li>
                <li><a href="/cabinet/edit/">Редактировать данные</a></li>         
            </ul>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

