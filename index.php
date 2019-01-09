<html>
<body style="background-color: LightSteelBlue;">

<h1>Testing PHP</h1>

<?php 
    $txt = "Hello World!";

    echo "Start with ".$txt."";
?>
<br>

<?php
    $names=array("Bert","Ernie","Tommie","Henk","Frits","Bello");
    $ages=array("23","33","43","53","63","73");
    echo "My friend " .$names[1]. " is " .$ages[3]. " year old.";
?>
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

<?php
    $x = 4;
    $y = 42;
    $z = 3;

    echo $x * $y / $z . "<br>"; 
?>
<br>
<h4>$_POST</h4>
    <form action="index.php" method="post">
        <input type="text" name="name" value="Type your name">
        <input type="submit" value="Submit">
    </form>

<?php
        $name = $_POST["name"];
        echo "Hello " .$name; 
?>

<?php
    // vars
    // operators
    // while loop
    // for loop
    // sessions
    // $_POST
    // if / switch
    // arrays

?>
<br> 

<h4>Variables</h4>
<?php
    $twitter = "twitter.com/renedotone/";
    $github = "github.com/renedotone/";
    $face = "facebag.com/hallo/";


    echo "Twitter: $twitter </br>";
    echo "Github: " . $github ." </br>";
    echo "Facebag: " . $face;
?>
<br> 

<h4>Operators</h4>
<?php
    $x = 5;
    $y = 2;

    echo $x + $y . "</br>";
    echo $x - $y . "</br>";
    echo $x * $y . "</br>";
    echo $x / $y . "</br>";
    echo $x % $y . "</br>";
?>
<br> 

<h4>Assingment Operator</h4>
<?php
    $x = 5;
    $x += 20;
    $y = 2;

    echo $x + $y . "</br>";
    echo $x - $y . "</br>";
    echo $x * $y . "</br>";
    echo $x / $y . "</br>";
    echo $x % $y . "</br>";
?>
<br>

<h4>While Loop</h4>
<?php
$x = 2;

while($x <= 4){
    echo "Het nummer is: " . $x . "<br>";
    $x++;
}
?>

<?php
$x = 6;

while($x <= 5){
    echo "Het nummer is: " . $x . "<br>";
    $x++;
}
// Hierbij is het resultaat FALSE, dus er volgt geen resultaat
?>
<br>

<h4>Do...While Loop</h4>
<?php
$x=3;
$y=4;

do {
    echo "Het nummer is: $x <br>";
    $x++;
} while ($x <= 5);
"<br>";
do {
    echo "Het nummer is: $y <br>";
    $y++;
    } while ($y <= 2); 
//Deze while is false, geen resultaat,
//maar door DO wordt het resultaat sowieso 1 keer weergegeven.
?>
<br>

<h4>If...Else...Ifelse</h4>
<?php
$x = 5;

if ($x <= 4){
    echo "doubleCheck";
} else {echo "pizzapunt";
}   
?>
<br>
<?php
$fits=7;

if($fits >=8){
    echo "kanarie";
} else{
    echo "pietje";
}
?>
<br>
<?php
$x = 4;

if($x <= 2){
    echo "vis";
}
elseif($x >= 5){
    echo "mens";
}
else{
    echo "vogel";
}
?>
<br>

<h4>For loop</h4>
<br>
<?php
for($x = 2; $x <= 6; $x++){
    echo "Het nummer is: " . $x . "<br>"; 
}

?>
<br>
<?php
for($y=0; $y <=4; $y++){
    echo $y * 2 + 1 . "<br>";
}
?>
<br>
<?php
for($y=1; $y <=4; $y++){
    echo $y * 2 . "<br>";
}
?>

<h4>For each loop</h4>
<?php
$colors = array("red","blue","green","yellow");

    foreach ($colors as $bert) {
        echo "$bert <br>";
    }
?>
<br>
<?php
$numbers = array(1,2,3,4,5);

    foreach ($numbers as $value){
        echo $value *2 . "<br>";
    }
?>
<br>
<?php
    $id111 = array(
        "stad" => "Amsterdam",
        "straat" => "Rokin",
        "nummer" => 23
    );

    $id112 = array(
        "stad" => "Rotterdam",
        "straat" => "Weena",
        "nummer" => 45
    );

    $id113 = array(
        "stad" => "Utrecht",
        "straat" => "Neude",
        "nummer" => 67
    );

    $accounts = [$id111, $id112, $id113];

    foreach($accounts as $account){
        echo "<li>" . $account["straat"] . "</li>";
    }

?>

</body>
</html>