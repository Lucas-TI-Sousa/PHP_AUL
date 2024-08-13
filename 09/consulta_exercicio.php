<?php
$dsn = 'mysql:host=localhost;dbname=bd_clientes';
$user = 'root';
$password = '';

try {
    // https://www.php.net/manual/en/pdo.connections.php
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT * FROM bd_clientes.tb_clientes";
    $stmt = $dbh->query($sql);

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo '<pre>';
    print_r($result);
    echo '</pre>';
} catch(PDOException $e) {
    echo "Erro ao se conectar ao banco: <br>";
    echo $e;
    exit;
}
?>