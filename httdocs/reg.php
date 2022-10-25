<!DOCTYPE html>
<html lang="ru">
<?php
$website_title = 'Регистрация';
require '/Domains/mysite.local/httdocs/blocks/head.php'
?>
<body>
    <div class="container">
        <?php require '/Domains/mysite.local/httdocs/blocks/header.php';?>
        <div class="form"> 
            <h2 class="title_registr">Форма регистрации</h2>
            <form action="/httdocs/reg/data.php" method="post">
                <label for="username">Ваше имя</label>
                <input type="text" name="username" id="username">

                <label for="email">Email</label>
                <input type="email" name="email" id="email">

                <label for="login">Логин</label>
                <input type="text" name="login" id="login">

                <label for="pass">Пароль</label>
                <input type="password" name="pass" id="pass">

                <button type="submit">Зарегистрироваться</button>
            </form>
        </div>
        <?php require '/Domains/mysite.local/httdocs/blocks/footer.php'; ?>
    </div>
</body>
</html>