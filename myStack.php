<?php
//JOREN SUMAGANG && JEBE INOC;
session_start();
$sizeOfStack = 5;


if(empty($_SESSION['stack'])) {
    $_SESSION['stack'] = array();
}

if(isset($_GET['push'])) {
    if(count($_SESSION['stack']) < $sizeOfStack) {
        array_push($_SESSION['stack'], $_GET['value']); 
    }
    else {
        echo "Stack is full!";
    }
}

if(isset($_GET['pop'])) {
    if(empty($_SESSION['stack'])) {
        echo "Stack is Empty! <br>";
    }
    else {
        array_pop($_SESSION['stack']);
    }
}

if(isset($_GET['peek'])) {
    if(empty($_SESSION['stack'])) {
        echo "Stack is empty!";
    }
    else {
        echo end($_SESSION['stack']);
    }
}

if(isset($_GET['isEmpty'])) {
    if(!empty($_SESSION['stack'])) {
        echo "false";
    }
    else {
        echo "true";
    }
}

if(isset($_GET['isFull'])) {
    if(count($_SESSION['stack']) == $sizeOfStack) {
        echo "true";
    }
    else {
        echo "false";
    }
}

$stackSession = $_SESSION['stack'];


?>
<!DOCTYPE html>
<head>
    <title>Joren Stack</title>
</head>
<body style="text-align: center;">

    <form action="" method="GET">
        <input type="text" style="margin: 20px" name="value" placeholder="Enter Value"> <br>
        <button name="push">PUSH</button>
        <button name="pop">POP</button>
        <button name="peek">PEEK</button>
        <button name="isEmpty">IS EMPTY</button>
        <button name="isFull">IS FULL</button>
    </form>

    <div class="container">
        <?php 

            foreach($stackSession as $stack) {
                echo $stack . "<br>";
            }

        ?>
    </div>
    
</body>
</html>