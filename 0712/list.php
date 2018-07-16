<?php
header('Content-Type:text/html; charset=utf-8');
$username = 'root';
$password = '123456';
$dbname = 'demo';
$result = null;

try{
    $pdo = new PDO("mysql:host=localhost;dbname=demo;port=3306", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("SELECT id, title, content, user_name, created_at FROM message");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($result);

}catch(PDOException $e){
    echo $e->getMessage();

}

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>List</title>
</head>
<body>
<h3>Message list</h3>
<table border="1">
<thead>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>content</th>
        <th>Author</th>
        <th>Date</th>
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
        echo "<td>". date('Y-m-d H:i:s', $record['created_at'])."</td>";
    echo "</tr>";
}
?>
</tbody>
</table>
</body>
</html>
