<?php

class DatabaseConnection
{
    private $server = 'mysql:host=localhost;dbname=DBNAME_pythons';

    private $user = 'DBNAME_pythons';

    private $pass = '  ';

    private $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
t*c9hG15435twg6%t*c9hG15435twg6%

idarsa W^Gw}=jrwNP@

    protected $con;

    public function openConnection()
    {
        try {
            $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);

            return $this->con;
        } catch (PDOException $e) {
            echo 'There is some problem in connection: ' . $e->getMessage();
        }
    }

    public function closeConnection()
    {
        $this->con = null;
    }
}