<?php

require_once 'mysql.php';

// $sql = "SELECT * FROM movies";
// $sql = "SELECT name, price FROM movies";
// $sql = "SELECT * FROM movies WHERE id = 5";
$sql = "SELECT id, name, description, price FROM movies WHERE description LIKE '%book%'";
$result = $connection -> query($sql);
$data = $result -> fetch_all(MYSQLI_ASSOC);

echo "<pre>";
print_r($data);
echo "</pre>";

$new = "INSERT INTO movies (name, description, price) VALUES ('Gladiator','In ancient Rome, General Maximus Decimus Meridius leads the Roman army to decisive
 victory and earns the favor of the dying Emperor Marcus Aurelius, who wishes to name him protector of Rome. Jealous and corrupt, the emperor’s son Commodus murders his father, usurps the throne, 
 and orders the execution of Maximus and his family. Escaping death only to be captured into slavery, Maximus is trained as a gladiator. Rising through the blood-soaked sands of the Colosseum,
  he fights his way to the heart of the empire to avenge his murdered family and restore honor to Rome.',3999)";

//   $connection->query($new);
  $newMovie = "SELECT id, name, description, price FROM movies WHERE description LIKE '%Gladiator%'";
  $newresult = $connection->query($newMovie);
  $newdata = $newresult->fetch_all(MYSQLI_ASSOC);

  echo "<pre>";
print_r($newdata);
echo "</pre>";
