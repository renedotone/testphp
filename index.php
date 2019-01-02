<html>
<body style="background-color: LightSteelBlue;">

<h1>Testing PHP</h1>

<?php 
    $txt = "Hello World!";

    echo "Start with ".$txt."";
?>

<br>
<br>

<?php
    $names=array("Bert","Ernie","Tommie","Henk","Frits","Bello");
    $ages=array("23","33","43","53","63","73");
    echo "My friend " .$names[1]. " is " .$ages[3]. " year old.";
?>

<br>
<br>

<?php
    $loggedIn = false;

    if ($loggedIn == true) {
        echo "You are logged in";
    } else {
        echo "Please log in";
    }

?>

<br>
<br>

<?php
    $x = 4;
    $y = 42;
    $z = 3;

    echo $x * $y / $z;
?>

<br>
<br>

    <form action="process.php" method="post">
        <input type="text" name="name" value="Type your name">
        <input type="submit" value="Submit">
    </form>

</body>
</html>