<?php
//Запись ответов в файл json

$answer1 = $_POST["1"];
$answer2 = $_POST["2"];
$answer3 = $_POST["3"];
$answer4 = $_POST["4"];

$data = json_decode(file_get_contents("../json/opros.json"));

$data[] = ["msg1" => $answer1, "msg2" => $answer2, "msg3" => $answer3, "msg4" => $answer4, "date" => time()];

file_put_contents("../json/opros.json", json_encode($data));

header("location:endSurvey.php");
