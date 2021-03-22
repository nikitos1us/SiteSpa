<html>
<?php
$dsn = "pgsql:host=localhost;port=5432;dbname=laravel;user=postgres;password=1111";
$dsn1 = "host=localhost port=5432 dbname=laravel user=postgres password=1111";
$appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$connStr = "host=localhost port=5432 dbname=laravel user=postgres password='1111' options='--application_name=$appName'";

//simple check

try{
    $conn = pg_connect($connStr);
    if($conn){
        echo "Connected to the <strong>DB</strong> database successfully!";
    }
}catch (PDOException $e){
    echo $e->getMessage();
}
?>
</html>
