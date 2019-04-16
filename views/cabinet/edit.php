<?php include ROOT . '/views/layouts/header.php'; ?>
             
<?php if ($result): ?>
    <h3><p>Данные отредактированы!</p></h3>
<?php else: ?>
    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
        <p><h3>Редактирование данных</h3>
            <div id="range1">
             <div class="login-wr">
                 <div class="form">
                    <form action="" method="POST">
                      <p>Имя: </p>
                        <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                        <p>Пароль:</p>
                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                        <input type="submit" name="submit" value="Сохранить" />
                     </p>
                 </form>
                </div>
              </div>
            </div>
    <?php endif; ?>


         
                