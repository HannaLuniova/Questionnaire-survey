<?php
function dateFormat($time)
{
    $monthsList = [
        "1" => "Января",
        "2" => "Февраля",
        "3" => "Марта",
        "4" => "Апреля",
        "5" => "Майя",
        "6" => "Июня",
        "7" => "Июля",
        "8" => "Августа",
        "9" => "Сентября",
        "10" => "Октября",
        "11" => "Ноября",
        "12" => "Декабря"
    ];

    $dayList = [
        "Monday" => "Понедельник",
        "Tuesday" => "Вторник",
        "Wednesday" => "Среда",
        "Thursday" => "Четверг",
        "Friday" => "Пятница",
        "Saturday" => "Суббота",
        "Sunday" => "Воскресенье"
    ];

    $day = $dayList[date("l", $time)];
    $month = $monthsList[date("n", $time)];

    return date("d $month Y H:i:s ($day) ", $time);
}