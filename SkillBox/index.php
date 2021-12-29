<?php
require_once __DIR__ . "/data/users.php";
require_once __DIR__ . "/data/passwords.php";
    $arrayKeyPass = '';
    $arrayKeyUser = '';
    $truereg = 0;
    $falsereg = 0;
    $message = '';

if(!empty($_POST)) {
    $userLogin = $_POST['login'];
    $userPassword = $_POST['password'];
    $arrayKeyUser = array_search($_POST['login'], $users);
    $arrayKeyPass = array_search($_POST['password'], $passwords);

    if ($arrayKeyUser != false || $arrayKeyUser == $arrayKeyPass) {
        $message = 'Вы успешно авторизировались';
        $truereg = 1;
    } else {
        $message = 'Логин или пароль введены неверно';
        $falsereg = 1;
    }
} else {
    $userLogin = '';
    $userPassword = '';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="styles.css" rel="stylesheet">
    <title>Project - ведение списков</title>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
</head>

<body>

    <div class="header">
    	<div class="logo"><img src="i/logo.png" alt="Project"></div>
    	<div class="author">Автор: <span class="author__name">Осадчий Д.И.</span></div>
    </div>

    <div class="clear">
        <ul class="main-menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#">Каталог</a></li>
        </ul>
    </div>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
    	<tr>
        	<td class="left-collum-index">
			
				<h1>Возможности проекта —</h1>
				<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
				
			
			</td>

            <td class="right-collum-index">
				<div class="project-folders-menu">
					<ul class="project-folders-v">
    					<li class="project-folders-v-active"><a href="">Авторизация</a></li>
    					<li><a href="#">Регистрация</a></li>
    					<li><a href="#">Забыли пароль?</a></li>
					</ul>
				    <div class="clearfix"></div>
				</div>

                <?php if($_SERVER['REQUEST_METHOD'] === 'POST' && array_search($_POST['login'], $users) != false && array_search($_POST['login'], $users) == array_search($_POST['password'], $passwords)){ ?>
				<div class="index-auth">
                    <form action="index.php?login=yes&user=<?=$userLogin?>&&password=<?=$userPassword?>" method="post">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="iat">
                                    <label for="login_id">Ваш e-mail:</label>
                                    <input id="login_id" size="30" name="login" value="<?=$userLogin?>">
                                </td>
							</tr>
							<tr>
								<td class="iat">
                                    <label for="password_id">Ваш пароль:</label>
                                    <input id="password_id" size="30" name="password" type="password">
                                </td>
							</tr>
							<tr>
								<td><input type="submit" value="Войти"></td>
							</tr>
						</table>
                    </form>
				</div>
			    <?php }; ?>
			</td>
        </tr>
    </table>
    
    <div class="clearfix">
        <ul class="main-menu bottom">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#">Каталог</a></li>
        </ul>
    </div>

    <div class="footer">&copy;&nbsp;<nobr>2018</nobr> Project.</div>

</body>
</html>