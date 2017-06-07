<?php

namespace classes;


class GetDate
{
    public function __construct()
    {
        $day[0]="воскресение";
        $day[1]="понедельник";
        $day[2]="вторник";
        $day[3]="среда";
        $day[4]="четверг";
        $day[5]="пятница";
        $day[6]="суббота";

        $month[0]="Января";
        $month[1]="Февраля";
        $month[2]="Марта";
        $month[3]="Апреля";
        $month[4]="Мая";
        $month[5]="Июня";
        $month[6]="Июля";
        $month[7]="Августа";
        $month[8]="Сентября";
        $month[9]="Октября";
        $month[10]="Ноября";
        $month[11]="Декабря";


        $today_day = date("w");
        $today_month = date("n");

        echo "Сегодня ".$day["$today_day"].", ".date("j")." ".$month["$today_month"];
    }
}