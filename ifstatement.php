<?php 
    $title = "If Statement";
    include 'includes/header.php'?>

    <?php 
    
    //An If Statement the will carry out an action based on the value of the varialbe

    echo '<h2>If Statement</h2>';

    $grade = 80;
    //===, ==, >, <, <=, >=,
    if($grade >= 50){
        echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
    }
    else{
        echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
    }
    $grade = 'C';
    //if-else if-else
    if($grade == 'A'){
        echo '<h2 style= "color: green"> YOU ARE A SUPERSTAR!</H2>';
    }
    elseif($grade == 'B'){
        echo '<h2 style= "color: blue"> YOU DID WELL!</H2>';
    }
    else{
        echo '<h2 style= "color: red"> YOU HAVE FAILED......</H2>';
    }
    ?>
<?php require 'includes/footer.php' ?>