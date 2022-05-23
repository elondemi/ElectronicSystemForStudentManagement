
<!-- veq prov -->
<?php 
Class Database
{
    private $user;
    private $host;
    private $pass ;
    private $db;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db = "sems";
    }

    public function connect()
    {

        $conn = new mysqli($this->host, $this->user, $this->pass, $this->db);

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

              // Taking all 5 values from the form data(input)
              $emri_lendes =  $_REQUEST['emri_lendes'];
              $pershkrimi_lendes = $_REQUEST['pershkrimi_lendes'];
              $ects =  $_REQUEST['ects'];
              $semestri = $_REQUEST['semestri'];
        $sql = "INSERT INTO courses (course_name, course_description, course_ects, course_semester)
        VALUES ('$emri_lendes', '$pershkrimi_lendes', '$ects', '$semestri')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
         
      
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
    }
}
?>
