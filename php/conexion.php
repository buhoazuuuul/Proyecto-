<?php

class Connection
{
    private  $server = "mysql:dbname=innexu;host=127.0.0.1";
    private  $user = "root";
    private  $pass = "";
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\'');
    protected $con;

    public function openConnection()
    {
        try {
            $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
            return $this->con;
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }
    public function closeConnection()
    {
        $this->con = null;
    }
}
