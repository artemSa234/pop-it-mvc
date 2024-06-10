<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css " rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <title>Pop it MVC</title>
</head>
<body class="">
  <div class="d-flex">
   <nav class="">
       <a href ="<?= app()->route->getUrl('/hello') ?>">Главная</a>
       <?php if (app()->auth::check()): ?>
            <!-- <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->login ?>)</a> -->
            <?php if (app()->auth::role() == "admin"): ?>
                <!-- <h3>Функции сотрудника</h3> -->
                <a href="<?= app()->route->getUrl('/emp') ?>">Создать сотрудника</a>
                <a href="<?= app()->route->getUrl('/subunit') ?>">Создать подразделение</a>
                <!-- <a href="<?= app()->route->getUrl('/assign_an_employee') ?>">Прикрепить сотрудника</a> -->
                <a href="<?= app()->route->getUrl('/calculate') ?>">Подсчет среднего возраста</a>
                <a href="<?= app()->route->getUrl('/subunit_sel') ?>">Выбор по подразделениям</a>
                <!-- <h3>Функции админа</h3> -->
                <a href="<?= app()->route->getUrl('/employees') ?>">Создать сотрудника отдела</a>
                <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->login ?>)</a>
            <?php elseif (app()->auth::role() == "hr"): ?>
              <!-- <h3>Функции сотрудника</h3> -->
                <a href="<?= app()->route->getUrl('/emp') ?>">Создать сотрудника</a>
                <a href="<?= app()->route->getUrl('/subunit') ?>">Создать подразделение</a>
                <!-- <a href="<?= app()->route->getUrl('/assign_an_employee') ?>">Прикрепить сотрудника</a> -->
                <a href="<?= app()->route->getUrl('/calculate') ?>">Подсчет среднего возраста</a>
                <a href="<?= app()->route->getUrl('/subunit_sel') ?>">Выбор по подразделениям</a>
                <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->login ?>)</a>
            <?php endif; ?>
       <?php else: ?>
            <a href ="<?= app()->route->getUrl('/login') ?>">Войти</a>
       <?php endif; ?>
   </nav>
   </div>

<main>
   <?= $content ?? '' ?>
</main>

<style>
/* Обнуляем отступы и поля для всех элементов */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Устанавливаем стили для body */
body {
    font-family: Arial, sans-serif; /* Используем шрифт Arial или его аналоги */
    background-color: #f8f9fa; /* Цвет фона */
    color: #333; /* Цвет текста */
}

/* Стили для навигационного меню */
nav {
    background-color: #007bff; /* Цвет фона навигационного меню */
    padding: 10px 20px; /* Внутренние отступы */
}

nav a {
    color: #fff; /* Цвет текста ссылок */
    text-decoration: none; /* Убираем подчеркивание ссылок */
    margin-right: 20px; /* Отступы между ссылками */
    font-weight: bold; /* Жирный шрифт */
    transition: color 0.3s; /* Плавное изменение цвета при наведении */
}

nav a:hover {
    color: #cce5ff; /* Цвет ссылки при наведении */
}

/* Стили для главного контента */
main {
    padding: 20px; /* Внутренние отступы */
}

/* Стили для заголовков */
h1, h2, h3 {
    margin-bottom: 20px; /* Отступ снизу */
}

/* Стили для кнопок */
button {
    padding: 10px 20px; /* Внутренние отступы */
    border: none; /* Убираем границу */
    background-color: #007bff; /* Цвет фона */
    color: #fff; /* Цвет текста */
    cursor: pointer; /* Изменяем курсор при наведении */
    transition: background-color 0.3s; /* Плавное изменение цвета при наведении */
}

button:hover {
    background-color: #0056b3; /* Цвет кнопки при наведении */
}

   </style>

</body>
</html>