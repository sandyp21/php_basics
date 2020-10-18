<?php 
    $title = "While /Do While Loop";
    include 'includes/header.php'?>

    <h1>While Loop</h1>
    <?php
        $grade = 0; 
        // Infinite loop
       // while($grade < 10){
        //    echo '<p> I AM LESS THAN 10!</p>';
       // }
        //pre-condition loop

       while($grade < 10){
            echo '<p> I AM LESS THAN 10!</p>';
            $grade++;
        }

        echo 'EXIT LOOP!';
    ?>

    <h1>Do-While Loop</h1>

    <?php 
        //pre-condition loop
        $grade = 0;
        do{
            echo '<p>I AM A DO WHILE LOOP!</p>';
            $grade++;
        }while($grade < 10);

        echo 'EXIT LOOP!';
    ?>
<?php require 'includes/footer.php' ?>