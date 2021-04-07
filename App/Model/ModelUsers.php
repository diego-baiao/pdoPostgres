<?php 

namespace App\Model;

class ModelUsers {
     /**
     * PDO object
     * @var \PDO
     */
    private $pdo;
    public $userNameToken;

    /**
     * init the object with a \PDO object
     * @param type $pdo
     */
    public function __construct($pdo, $userNameToken = null) {
        $this->pdo = $pdo;
        $this->userNameToken = $userNameToken;
    }

    public function getColumns() { 
        $query = "SELECT column_name, data_type
                    FROM information_schema.columns 
                    WHERE table_name = 'useraccess'" ;
        $stmt = $this->pdo->query($query);
        $stmt->execute(); 
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getUsers() { 
        $query = 'SELECT usernametoken, emailtoken
                    FROM "tempDois".useraccess';
        $stmt = $this->pdo->query($query);
        $stmt->execute(); 
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getUserNameTokenExists($userNameToken) { 
        $query = 'SELECT COUNT(*)
                    FROM "tempDois".useraccess
                    WHERE usernametoken = '."'$userNameToken'";
        echo $query;
        $stmt = $this->pdo->query($query);
        $stmt->execute(); 
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}