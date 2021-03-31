<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!--свои стили-->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="container book">

    <?php
    // Проверка логина,пароля для администратора и запись ответов опроса с файла json
    //запись email посетителя с файла txt с указанием времени и даты

    include "functionDate.php";

    $email = $_POST["name"];
    $password = $_POST["password"];

    $cond1 = preg_match("/^admin$/iu", $_POST["name"]);
    $cond2 = preg_match("/^admin$/iu", $_POST["password"]);


    $string = file_get_contents("../txt/registration.txt");
    $string1 = ltrim($string, $characters = '\n');
    $keywords = preg_split("/[ \d\n]+/iu", $string1);

    if ($cond1 && $cond2) {
        $array = json_decode(file_get_contents("../json/opros.json"), true);

        echo
        "<table class='table table-bordered table-info table-hover'>";
        echo
                   "<th> Email посетителя</th>
                     <th>Какие домашние питомцы живут у вас дома?</th>
                     <th>Ставите прививки своим животным?</th>
                     <th>Сколько лет Вашему любимцу?</th>
                     <th>Чем угощаете своих кошек, собак, хорьков? </th>
                     <th>Дата и Время </th>";

        for ($i = 0; $i < count($array); $i++) {
            echo 
            '<tr class="table-light"><td>'
                . $keywords[$i] .
                '</td> <td>'
                . $array[$i]["msg1"] .
                '</td> <td>'
                . $array[$i]["msg2"] .
                '</td><td>'
                . $array[$i]["msg3"] .
                '</td><td>'
                . $array[$i]["msg4"] .
                '</td><td>'
                . dateFormat($array[$i]["date"]) .
                '</td></tr>';
        }

        echo "</table>";
    }

    ?>

</div>
<!-- Bootstrap: js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

</html>