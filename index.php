<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    $dbuser = $_ENV['MYSQL_USER'];
    $dbpass = $_ENV['MYSQL_PASS'];

    try {
        $mysqli = new mysqli('mysql', $dbuser, $dbpass, 'dbMySQL');
        if ($mysqli->connect_errno) {
            echo "Sorry, this website is experiencing problems.";
            echo "Error: Failed to make a MySQL connection, here is why: \n";
            echo "Errno: " . $mysqli->connect_errno . "\n";
            echo "Error: " . $mysqli->connect_error . "\n";
            exit;
        }
        $sql = "SELECT * FROM clientes";        
        if (!$result = $mysqli->query($sql)) {
            echo "Sorry, the website is experiencing problems.";
            exit;
        }
        
        echo "<h2>Cadastro de Clientes</h2>\n";

        echo "  <table>\n
                    <thead>\n
                    <tr>\n
                        <th>N° Cliente</th>\n
                        <th>Nome</th>\n
                        <th>Email</th>\n
                    </tr>\n
                    </thead>\n
                    <tbody>\n
        ";

        while ($cliente = $result->fetch_assoc()) {            
            echo "      <tr>\n
                            <td><a href='#' >" .$cliente['id']. "</a></td>\n
                            <td><a href='#' >" .$cliente['nome']. "</a></td>\n
                            <td><a href='#' >" .$cliente['email']. "</a></td>\n                            
                        </tr>";
        }
        echo "</body></table>\n";

        $result->free();
        $mysqli->close();

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

    ?>
</body>
</html>