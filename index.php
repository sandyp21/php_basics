
    <?php 
        $title = "Index";
        include 'includes/header.php'
    ?>
    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Basics</h1>
    <br/>
    <?php
        //Printing to HTML using echo  
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    ?>

    <?php
        //declare variable  
        $name = 'Sandra Spaulding';
        $age = 21;

        //echo variable
        echo $name;
        echo '<h1>My Name Is: '.$name.' </h1>';
        echo '<h1>My Age Is: '.$age.' </h1>';

        //echo using double quotes and interpolation
        echo "<h1>My Name Is: $name </h1>";

    ?>

<button type="button" class="btn btn-dark">Click Me</button>

   <?php require 'includes/footer.php' ?>