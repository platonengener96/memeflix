<?php 

class User {
    private $con, $sqlData;

    public function __construct($con, $username)
    {
        $this->con = $con;

        $query = $con->prepare("SELECT * FROM users WHERE username=:username");
        $query->bindValue(":username", $username);
        $query->execute();

        $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
        
    }

    public function getFirstName() {
        return $this->sqlData["firstName"];
    } // end the function getFirstName()

    
    public function getLastName() {
        return $this->sqlData["lastName"];
    } // end the function getFirstName()

    public function getEmail() {
        return $this->sqlData["email"];
    } // end the function getEmail()

}
?>