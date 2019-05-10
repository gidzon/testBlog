<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    $user = 'root';
    $password = 'root';
    $db = 'testing';
    $host = 'localhost';

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);

    $query = $pdo->query('SELECT * FROM `users` ORDER BY `login` DESC LIMIT 2');
    while($row = $query->fetch(PDO::FETCH_OBJ)) {
      echo '<h1>' . $row->login . '</h1>
        <p><b>Email:</b> ' . $row->email . '</p>
        <p><b>Имя:</b> ' . $row->name . '</p>
        <p><b>Фамилия:</b> ' . $row->surname . '</p>';
    }

    $name = 'Петр';
    $id = 3;
    $sql = 'SELECT `name`, `id`, `email` FROM `users` WHERE `name` = :name && `id` >= :id';
    $query = $pdo->prepare($sql);
    $query->execute(['name' => $name, 'id' => $id]);
    $users = $query->fetchAll(PDO::FETCH_OBJ);

    foreach($users as $user) {
      echo '<h1>' . $user->name . '</h1>
        <p><b>Email:</b> ' . $user->email . '</p>';
    }

    $sql = 'SELECT * FROM `users` WHERE `name` = :name LIMIT 1';
    $query = $pdo->prepare($sql);
    $query->execute(['name' => $name]);
    $user = $query->fetch(PDO::FETCH_OBJ);

    echo $user->email;
  ?>
</body>
</html>
