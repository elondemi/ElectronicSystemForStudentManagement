
<?php 
Class Database
{
    private $user;
    private $host;
    private $pass ;
    private $db;
    public $conn;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "Endrit1.2";
        $this->db = "sems";
    }

    public function connect()
    {
        try{
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
       return $this;
    } catch (Exception $e){
        echo 'Connection failed ';
    }

    }

    // public function executeRaw($raw){
    //     $stmt = $this->conn->prepare($raw);
    //     $stmt->execute();
    //     return $stmt;
    // }

    public function execute($query, $bindtypes = null, $params = null){
        $stmt = $this->conn->prepare($query);
        if($bindtypes != null){
            $stmt->bind_param($bindtypes, ...$params);
        }

        $stmt->execute();
        return $stmt;
    }
}
?>
