<?php

//if ($_SERVER["REQUEST_METHOD"] === "POST") {
$host   = "localhost";
$user   = "root";
$senha  = "root";
$dbname = "alexsander";

$db = new mysqli($host, $user, $senha, $dbname);

$result = $db->query("SELECT * FROM clientes LIMIT 100;");

echo "<thead><tr>";
foreach ($result->fetch_fields() as $campo) {
 echo "<th>$campo->name</th>";
}
echo "</tr></thead><tbody>";
foreach ($result as $entrada) {
 echo "<tr>";
 foreach ($entrada as $campo => $dado) {
  echo "<td>$dado</td>";
 }
 echo "</tr>";
}
echo "</tbody>";
/*} else {
 echo "Error: POST Method Required.";
}*/
