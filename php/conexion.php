<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "innexu";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connection Success";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

class Connection
{
    private  $server = "mysql:dbname=innexu;host=127.0.0.1";
    private  $user = "root";
    private  $pass = "";
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
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
