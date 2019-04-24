<?php include ROOT . '/views/layouts/header.php'; ?>
          
<?php if ($result): ?>
    <h3><p>Вы зарегистрированы!</p></h3>
<?php else: ?>
    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
<?php endif; ?>

  <div id="range1">
       <div class="login-wr">
          <h2>Регистрация на сайте</h2>
            <div class="form">
              <form action="" method="POST">
                  <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                  <input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                  <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                  <input type="submit" name="submit" value="Регистрация" />
               </form>
               <a href="/user/login/"> <p>Авторизироваться</p></a>
            </div>
        </div>
  </div>

<?php endif; ?>

<?php include ROOT . '/views/layouts/footer.php'; ?>


