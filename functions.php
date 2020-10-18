<?php 
    $title = "Functions";
    include 'includes/header.php'?>
    
    <h1>Functions</h1>

    <?php 
    
        /*Defining a Function */

        function writemessage(){
            echo "You are a really nice person, have a nice day!<br/>";
        }

        /* Calling a Function */

        writemessage();
        writemessage();
        echo "<hr>";
        writemessage();
        writemessage();

        /* Function with Parameters */

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum<br/>";
        }
        /* Pass by Reference - use ampersand in parameter */
        function changeNum(&$num){
            $num = $num + 10;
            // $num+= 10;
        }

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }


        $num = 500;
        addFunction(10, 20);
        addFunction(10, $num);
        addFunction('25', "75");

        changeNum($num);
        echo $num . '<br/>';

        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/>';
        
    ?>
<?php require 'includes/footer.php' ?>