
<?php 
Class Database
{
    private $user;
    private $host;
    private $pass ;
    private $db;
    private $conn;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db = "sems";
    }

    public function connect()
    {

        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
       if(!$this->conn) {
           echo "Connection Failed!";
       }
       return $this;

    }

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
