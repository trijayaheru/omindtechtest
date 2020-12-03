<?php namespace App\Helpers;

setlocale (LC_ALL, 'id_ID.utf8','ind');

class DateHelper extends Helper{

    public static function getCurrentDateTime(){
        return date('Y-m-d H:i:s');
    }

    public static function formatDate($date, $with_time = FALSE, $format = '%d %b %Y')
    {
        $date = date('Y-m-d H:i:s', strtotime($date . ' + 8 hours'));
        if($date != '' && $with_time == FALSE){
            return strftime($format, strtotime($date));
        }
        if($date != '' && $with_time == TRUE){
            return strftime($format.' at %H:%M', strtotime($date));
        }

        return '-';
    }

    public static function dateDiff($dateStart, $dateEnd, $returnFormat)
    {
        $datetime1 = date_create($dateStart);
        $datetime2 = date_create($dateEnd);
        $interval  = date_diff($datetime1, $datetime2);

        return $interval->format($returnFormat)+1;
    }

    public static function formatDay($date)
    {
        return strftime('%A',strtotime($date));
    }

    public static function formatTime($date)
    {
        return date('H:i',strtotime($date));
    }

    public static function formatDateForMysql($date)
    {
        return date('Y-m-d H:i:s', strtotime($date));
    }

    public static function generateYear($current_year, $max_year)
    {
        $result = array();
        for($index = 0; $index <= $max_year; $index++){
            $year = $current_year + $index;
            $result[$year] = $year;
        }

        return $result;
    }
}