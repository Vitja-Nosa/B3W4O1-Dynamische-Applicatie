<?php
require("connection.php");

$query = "SELECT * FROM `characters`";
$result = $conn->prepare($query);
$result->execute();
$character = $result->fetchall();
// echo "<pre>";
// var_dump($character);
// echo "</pre>";
$count2 = 0;
foreach($character as $value) {
    $count2++;
}
$count = 0;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle <?php echo $count2; ?> characters uit de database</h1>

</header>
<div id="container">
    <?php foreach($character as $value) { ?>
    <a class="item" href="character.php?id=<?php echo $count;?>">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $character[$count]["avatar"]?>">
        </div>
        <div class="right">
            <h2> <?php echo $character[$count]["name"] ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $character[$count]["health"] ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?php echo $character[$count]["attack"] ?> </li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?php echo $character[$count]["defense"] ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
   <?php 
    $count++;
    } ?>
</div>
<footer>&copy; Vitja Nosa 2021</footer>
</body>
</html>