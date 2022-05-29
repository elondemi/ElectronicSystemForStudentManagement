
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
<<<<<<< HEAD
        $this->pass = "Endrit1.2";
=======
        $this->pass = "";
>>>>>>> 171c1a0e4bceb324e4def707ca40ae316e0f433b
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
