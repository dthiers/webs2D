<?php

function firstDayOfTheMonth($date){ 
    $dates = new DateTime($date); 
    return $dates->format('w');
}

function numberOfDaysInMonth($year, $month){
    $number = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    
    return $number;
}

/*function getCountForDay($day){
    $day = strtolower($day);
    
    if ($day == 'monday'){
        return 1;
    }
    elseif($day == 'tuesday'){
        return 2;
    }
    elseif($day == 'wednesday'){
        return 3;
    }
    elseif($day == 'thursday'){
        return 4;
    }
    elseif($day == 'friday'){
        return 5;
    }
    elseif($day == 'saturday'){
        return 6;
    }
    else {
        return 7;
    }
}

function drawCalendar(){
    echo '<table>';
     for ($i = 0; $i < 5; $i++){
         echo '<tr>';
         for ($y = 0; $y < 7; $y++){
             echo '<td>';
         }
         echo '</tr>';
     }
     echo '</table>';
}
*/