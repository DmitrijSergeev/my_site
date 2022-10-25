<!DOCTYPE html>
<html lang="ru">
<?php 
$website_title = 'PHP-блог';
require '/Domains/mysite.local/httdocs/blocks/head.php' ?>
<body>
    <div class="container">
        <?php require '/Domains/mysite.local/httdocs/blocks/header.php';?>
        <main>
            <ul class="content">
                <li class="about">О нас</li>
                <li class="contacts">Контакты</li>
                <li class="distance">Расчёт расстояний</li>
            </ul>
            <p class="main-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                Perspiciatis, at esse officia et magnam doloremque eius nobis <br> 
                asperiores vel aspernatur qui ad explicabo odit, recusandae quas. <br>
                Pariatur dolores totam illo! 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                Perspiciatis, at esse officia et magnam doloremque eius nobis <br> 
                asperiores vel aspernatur qui ad explicabo odit, recusandae quas. <br>
                Pariatur dolores totam illo!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                Perspiciatis, at esse officia et magnam doloremque eius nobis <br> 
                asperiores vel aspernatur qui ad explicabo odit, recusandae quas. <br>
                Pariatur dolores totam illo!
            </p>
        </main>
        <?php require '/Domains/mysite.local/httdocs/blocks/aside.php'; ?>
        <?php require '/Domains/mysite.local/httdocs/blocks/footer.php'; ?>
    </div>
</body>
</html>