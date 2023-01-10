<?php
//JOREN SUMAGANG && JEBE INOC;
session_start();
$sizeOfQueue = 5;


if(empty($_SESSION['queue'])) {
    $_SESSION['queue'] = array();
}

if(isset($_GET['enqueue'])) {
    if(count($_SESSION['queue']) < $sizeOfQueue) {
        array_push($_SESSION['queue'], $_GET['value']); 
    }
    else {
        echo "Queue is full!";
    }
}

if(isset($_GET['dequeue'])) {
    if(empty($_SESSION['queue'])) {
        echo "Queue is Empty! <br>";
    }
    else {
        array_shift($_SESSION['queue']);
    }
}

if(isset($_GET['peek'])) {
    if(empty($_SESSION['queue'])) {
        echo "Queue is empty!";
    }
    else {
        echo $_SESSION['queue'][0];
    }
}

if(isset($_GET['isEmpty'])) {
    if(!empty($_SESSION['queue'])) {
        echo "false";
    }
    else {
        echo "true";
    }
}

if(isset($_GET['isFull'])) {
    if(count($_SESSION['queue']) == $sizeOfQueue) {
        echo "true";
    }
    else {
        echo "false";
    }
}

$queueSession = $_SESSION['queue'];


?>
<!DOCTYPE html>
<head>
    <title>Joren Queue</title>
</head>
<body style="text-align: center;">

    <form action="" method="GET">
        <input type="text" style="margin: 20px" name="value" placeholder="Enter Value"> <br>
        <button name="enqueue">ENQUEUE</button>
        <button name="dequeue">DEQUEUE</button>
        <button name="peek">PEEK</button>
        <button name="isEmpty">IS EMPTY</button>
        <button name="isFull">IS FULL</button>
    </form>

    <div class="container">
        <?php 

            foreach($queueSession as $queue) {
                echo $queue . "<br>";
            }

        ?>
    </div>
    
</body>
</html>