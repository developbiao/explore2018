<?php
header('Content-Type:text/html; charset=utf-8');
$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['username'];
$created_at = time();

if(empty($title) || empty($content) || empty($author))
{
    exit("title or content or username can'not is empty!");
}

// connection to database
try{
    $dsn = "mysql:dbname=demo;host=localhost;port=3306";
    $username = 'root';
    $password = '123456';
    $attr = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $pdo = new PDO($dsn, $username, $password, $attr);
    $sql = 'INSERT INTO message(title, content, created_at, user_name) VALUES(:title, :content, :created_at, :user_name)';

    $stmt = $pdo->prepare($sql);

    $data = [
        ':title' => $title,
        ':content' => $content,
        ':created_at' => $created_at,
        ':user_name'=> $author
    ];

    $stmt->execute($data);
    $rows = $stmt->rowCount();

    if($rows){
        exit("Added message success!");

    }
    else
    {
        exit("Added message failed!");
    }

}catch(PDOException $e){
    echo $e->getMessage();
}
?>
