<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Все объявления.ru</title>
    <link rel="stylesheet" href="/template/css/styles.css">
</head>
	<body> 
		<div id="header">
			<div id="menu8">
				<ul>
					<li><a href="/">Главная</a></li>
					<?php if (User::isGuest()): ?>
							<li><a href="/user/login/">ВХОД</a></li>
					<?php else: ?>
							<li><a href="/cabinet/">Личный кабинет</a></li>
							<li><a href="/user/logout/">ВЫХОД</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
