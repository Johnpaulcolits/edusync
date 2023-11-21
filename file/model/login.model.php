<?php


class UserModel {
    private $dbConnection;

    public function __construct($dbConnection) {
        $this->dbConnection = $dbConnection;
    }


 

   public function verifyUser($username, $password) {
        
        $sql="select * from users where username = '" .$username."' and  password = '" .$password ."'";
        $result = $this->dbConnection->query($sql);

        return $result->fetch_assoc();



        
    }
  

    public function verifyAdmin($username, $password) {
   
        
        $sql="select * from admin where username = '" .$username."' and  password = '" .$password ."'";
        $result = $this->dbConnection->query($sql);

        return $result->fetch_assoc();



        
    }







}












 











?>