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
        <header>
            
        </header>
        <div class="content">
            <div class="input">

                <form action="calendar.php" method="post">
                    <input name="year" type="text" value="year" onclick="value=null">
                    <input name="month" type="text" value="month" onclick="value=null">

                    <input type="submit" value="bekijk">
                </form>
            </div>
        </div>

       
        
    </body>
</html>

