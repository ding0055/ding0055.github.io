<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="liding.php" method="post">
            <p>
                What day is it today?
                <select name="date" onchange="this.form.submit();">
                    <option value="">Select...</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                </select>
            </p>

        </form>
        <?php
        $date = $_POST['date'];
        echo "<p> Today is $date.</p>";
        echo "<p> Today is $date.</p>";
        echo "<p> Today is $date.</p>";
        // put your code here
        ?>
        
    </body>
</html>
