<!DOCTYPE html>

<?php 
include('functions.php');
error_reporting(E_ALL);
?>
<html>
    <head>
        <title>Calendar</title>
        <link rel="stylesheet" type="text/css" href="calendar.css">
    </head>
    
    <body>
    <?php 
        $year = $_POST["year"];
        $month = $_POST["month"];
        
        $newDate = "$year-$month-01";
        
        echo $newDate.'</br>';
        
        $firstDay = firstDayOfTheMonth($newDate);
        if ($firstDay == 0){
            $firstDay = 7;
        }
        $nrOfDays = numberOfDaysInMonth($year, $month);
        $dayNr = 1;
        
        echo $firstDay.'</br>'.$nrOfDays.'</br>'.$dayNr;
    ?>
        
        <header>
        </header>
        
        <table class="calendar">
            <tr id="header">
                <td>Monday</td>
                <td>Tuesday</td>
                <td>Wednesday</td>
                <td>Thursday</td>
                <td>Friday</td>
                <td>Saturday</td>
                <td>Sunday</td>
            </tr>
            
            <?php
            $startCount = false;
                while($nrOfDays > 0){
                    echo '<tr>';
                    
                    for ($y = 0; $y < 7; $y++){
                        if ($firstDay-1 == $y){
                            $startCount = true;
                        }
                        if ($startCount && $nrOfDays > 0){
                            echo '<td>'.$dayNr.'</td>';
                            $dayNr++;
                            $nrOfDays--;
                        }
                        else {
                            echo '<td></td>';
                        }
                    }
                    
                    echo '</tr>';
                    
                }
            ?>
        
        </table>
        
    </body>
</html>
