<?php
$user = "peres";
$password = "rootroot";
$database = "ultra_mercado";
$table = "produto";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  echo "<h2>Produtos</h2><ol>";
  foreach($db->query("SELECT nome FROM $table") as $row) {
    echo "<li>" . $row['nome'] . "</li>";
  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
