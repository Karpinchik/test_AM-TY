<?php
require 'data_bd.php';

$pdo = new PDO($dsn, $user, $password);
$sql = 'SELECT fullname, 100 - sum(amount) AS balans FROM transactions
        JOIN persons ON transactions.from_person_id = persons.id GROUP BY transactions.from_person_id';


// Этя часть кода высчитывает суммы которые нужно добавить в $sql, так как в пункте а) на данный момент
// отображается баланс без учета денег которые люди получили от других, но с учетом отданных ими другим.
// $sql = 'SELECT fullname, sum(amount) AS add_many FROM transactions
//         JOIN persons ON transactions.to_person_id = persons.id GROUP BY transactions.to_person_id';

$stmt = $pdo->query($sql);

echo "а) написать запрос, который бы выводил полное имя и баланс человека на данный момент" . "<br>";
while ($row = $stmt->fetch())
{
  echo $row['fullname']. " " . $row['balans'] . "<br>";
  // echo $row['fullname']. " " . $row['add_many'] . "<br>";
}
echo "<br>";

// В следующих запросах вызволи затруднения объеденение в одном запросе обращений к разным таблицам.
