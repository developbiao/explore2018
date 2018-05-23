<?php
header('Content-Type:text/html; charset=utf-8');
$dsn = "mysql:dbname=demo;host=localhost;port=3306";
$username = 'root';
$password = '123456';

$result = [];

try{
    $attr = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    $pdo = new PDO($dsn, $username, $password, $attr);
    $sql = "SELECT * FROM `message` ORDER BY `id` DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    echo $e->getMessage();
}

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>List message</title>
</head>
<body>
<h3>Show message list</h3>
<table border="1">
<thead>
<tr>
    <td>id</td>
    <td>title</td>
    <td>content</td>
    <td>author</td>
    <td>date</td>
</tr>
</thead>
<tbody>
    <?php
foreach($result as $record)
{
     echo "<tr>";
        echo "<td>{$record['id']}</td>";
        echo "<td>{$record['title']}</td>";
        echo "<td>{$record['content']}</td>";
        echo "<td>{$record['user_name']}</td>";
        echo "<td>" . date("Y-m-d H:i:s", $record['created_at']) . "</td>";
     echo "</tr>";
}
    ?>
</tbody>
</table>
</body>
</html>
