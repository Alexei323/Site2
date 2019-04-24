<?php include ROOT . '/views/layouts/header.php'; ?>

<?php if (isset($errors) && is_array($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li> - <?php echo $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<div id="range1">               
    <div class="login-wr">
      <h2>Вход на сайт</h2>        
      <div class="form">
        <form action="#" method="POST">
            <input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
            <input type="submit" name="submit" value="Войти " />
        </form>
        <a href="/user/register/"> <p> У вас нет аккаунта? Регистрация </p></a>
      </div>
     </div>
</div>   

<?php include ROOT . '/views/layouts/footer.php'; ?>





