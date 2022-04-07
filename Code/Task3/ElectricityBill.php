<html>
    <head>
        <title>TASK 3</title>
    </head>
    <body>
        <h1>
            PHP - CALCULATE ELECTRICITY BILL
        </h1>
        <form action="" method="post">
            Unit of bill:
            <input type="text" name="elec" placeholder="Please enter no. of unit">
            <input type="Submit">
        </form>
        <?php
    $unit_bill = $_POST['elec'];
    $cal;
    if($unit_bill <= 50)
    {
        $cal = $unit_bill * 3.50;
        echo "Total  Amount of ".$unit_bill ." is " .$cal;
    }elseif($unit_bill > 50 && $unit_bill <=100) {
        $cal = $unit_bill * 4.00;
        echo "Total Amount of ".$unit_bill ." is " .$cal;
    }elseif($unit_bill > 100 &&  $unit_bill<=250){
        $cal = $unit_bill * 5.20;
        echo "Total Amount of ".$unit_bill ." is " .$cal;
    }elseif($unit_bill > 250){
        $cal = $unit_bill * 6.50;
        echo "Total Amount of ".$unit_bill ." is " .$cal;
    }
    ?>
    </body>
</html>