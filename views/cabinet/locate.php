<?php include ROOT . '/views/layouts/header.php'; ?>

    <?php if ($result): ?>
    	<h2>Успешно!!!</h2>
        <h3>Объявление появится на сайте после проверки администаратором</h3>
    <?php else: ?>
    	<div id="menu3">
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
       <div id="content">
	            <h2>Квартиры</h2>
	            <div id="form_text">
             	 	<p>Сколько комнат: </p>
             	 	<p>Какая площадь: </p>
             	 	<p>Цена: </p>
             	 	<p>Улица: </p>
             	 	<p>Дом: </p>
             	 	<p>Квартира: </p>
             	 	<p>Описание: </p>
             	 	<p>Контактный номер: </p>
             	 	<br><br>
             	 </div>
          <div id="form_add">	
            <form action="" method="POST">
				<p><select class="input" name="header">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				  <option>более 5</option>
				</select></p>	
				<p><input class="input" type="text"
				value="<?php  echo ($_POST['square']); ?>" placeholder="Площадь" name="square"></p>

				<p><input class="input" type="text" 
				value="<?php echo ($_POST['price']); ?>" placeholder="Цена" name="price"></p>

				<p><input class="input" type="text"
				value="<?php echo ($_POST['outside']); ?>" placeholder="Улица" name="outside"></p>	

				<p><input class="input" type="text" 
				value="<?php echo ($_POST['home']); ?>" placeholder="№ дома" name="home"></p>	

				<p><input class="input" type="text" 
				value="<?php echo ($_POST['nomer']); ?>" placeholder="№ квартиры" name="nomer"></p>	

				<p><input class="input" type="text" 
				value="<?php echo ($_POST['content']); ?>" placeholder="Описание" name="content"></p>

				<p><input class="input" type="text" 
				value="<?php echo ($_POST['contact']); ?>" placeholder="Номер телефона" name="contact"></p>

				<input type="submit" name="submit" value="Отправить" />
			</form>
     	 </div>	
     	</div>
    <?php endif; ?>