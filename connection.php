<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=databank_b3w4o1', 'root', 'mysql');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>