<?php

// Проверка email,пароля посетителя 
$email = preg_match("/[\w\d\+_]+@[\w\d]{4,}\.[\w]{2,}/iu", $_POST["email"]);
$password = preg_match("/[\w\d]+/iu", $_POST["password"]);
$read = preg_replace("/[ \n]{1,}/iu", "", file_get_contents("../txt/registration.txt"));

// Строка состоящая из символов, без пробелов
$line1 = strripos($read, preg_replace("/[ ]{1,}/iu", "", $_POST["email"]));
$line2 = strripos($read, preg_replace("/[ ]{1,}/iu", "", $_POST["password"]));

if ($line1 === false && $line2 === false) {
    if ($email && $password) {

        echo '<h3 class="registr__title com ">Вы успешно прошли регистрацию</h3>';

        //Запись в файл txt введённый пароль и email, для исключения повторной регистрации
        file_put_contents("../txt/registration.txt", $_POST["email"] . "\n" . $_POST["password"] . "\n", FILE_APPEND);

        // Форма опроса
        echo
        '<form class="registr__form" action="recordingJson.php" method="post">
                        <h3 class="registr__title">Потратьте несколько минут своего времени<br> на заполнение следующей анкеты</h3><br>
                        <p class="registr__text"><mark>Какие домашние питомцы живут у вас дома?
                        <i class="fas fa-paw"></i></mark></p>
                        <input class="registr__form-input" type="text" name="1" placeholder="Ответ" tabindex="1" autofocus>
                        <p class="registr__text"><mark>Ставите прививки своим животным? 
                        <i class="fas fa-cat"></i></mark></p>
                        <input class="registr__form-input" type="text" name="2" placeholder="Ответ" tabindex="2">
                        <p class="registr__text"><mark>Сколько лет Вашему любимцу?
                        <i class="fas fa-dog"></i></mark></p>
                        <input class="registr__form-input" type="text" name="3" placeholder="Ответ" tabindex="3">
                        <p class="registr__text"><mark>Чем угощаете своих кошек, собак, хорьков? 
                        <i class="fas fa-fish"></i></mark></p>
                        <input class="registr__form-input" type="text" name="4" placeholder="Ответ" tabindex="4">
                        <button class="registr__form-btn" type="submit">Отправить</button>
                    </form>';
    } else {
        echo
        ' <h3 class="registr__title reg">Введите корректные данные</h3>
          <a class="application-btn" href="../index.php" autofocus>Пройти регистрацию заново  <i class="fas fa-sync"></i></a>';
    }
} else {
    echo '<h3 class="registr__title reg">Вы уже регистрировались</h3>
         <a class="application-btn" href="../index.php" autofocus>Пройти регистрацию заново  <i class="fas fa-sync"></i></a>';
}
