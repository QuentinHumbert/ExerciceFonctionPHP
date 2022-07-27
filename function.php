<?php

function holidayCheck($chosenday){
    // Variables de DateTime
    $estFerie = false;
    $day = new DateTime("d", $chosenday);
    $month = new DateTime("m", $chosenday);
    $year = new DateTime("y", $chosenday);

    $easter = new DateTime();

    // Jour Fériés fixes
    if ($day == 1 && $month == 1){
        $estFerie = true;
    }
    else if ($day == 1 && $month == 5){
        $estFerie = true;
    }
    else if ($day == 8 && $month == 5){
        $estFerie = true;
    }
    else if ($day == 14 && $month == 7){
        $estFerie = true;
    }
    else if ($day == 15 && $month == 8){
        $estFerie = true;
    }
    else if ($day == 1 && $month == 11){
        $estFerie = true;
    }
    else if ($day == 11 && $month == 11){
        $estFerie = true;
    }
    else if ($day == 25 && $month == 12){
        $estFerie = true;
    }


    return $estFerie;
}

print_r(easter_days());