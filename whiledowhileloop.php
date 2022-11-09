    <?php
        $title = "While/Do-While Loops";
        include 'includes/header.php';
    ?>
    <h1>While Loop</h1>
    <br/>
    <?php
        $grade = 0;
        //Infinite Loop
        // while($grade < 10){
        //    echo '<p>I AM LESS THAN 10!</p>';
        // }
        //Pre-Condition Loop    
        while($grade < 10){
            echo '<p>I AM LESS THAN 10!</p>';
            $grade++;
        }

        echo 'EXIT LOOP!';
    ?>   

    <h1>DO-While Loop</h1>
    <br/>
    <?php
    //Pre-Condition Loop
    $grade = 0;
        do{
            echo '<p>I AM DO WHILE LOOP</p>';
            $grade++;
        }while($grade < 10);
        ?>

</body>
</html>