<?php
    namespace app\database;

    use PDO;

    class Connection {
        public function connect() {
            try {
                $dsn = "pgsql:host=localhost;port=5195;dbname=phprest;";
                $pdo = new PDO($dsn, "postgres", "gasdatabasepor", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        
                if ($pdo) return $pdo;
        
            } catch (PDOException $e) {
                return die($e->getMessage());
        
            }
        }
    }
?>