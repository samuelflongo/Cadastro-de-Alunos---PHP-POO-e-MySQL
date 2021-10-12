<?php

require_once ('../DataBase/Connection.php');

class Student extends Connection {

    private $id, $name, $email, $password, $phone, $course, $status, $created_at, $updated_at;
    public $conn;


    public function __construct(){
        $this->conn = $this->connectDB();
    }

    //INSERIR CADASTRO DE ESTUDANTE

    function setDados($dados) {
        $dados = json_decode($dados);
        $this->id = $dados->id;
        $this->name = $dados->name;
        $this->email = $dados->email;
        $this->password = $dados->password;
        $this->phone = $dados->phone;
        $this->course = $dados->course;
        $this->status = $dados->status;
        $this->created_at = $dados->created_at;
        $this->updated_at = $dados->updated_at;
    }


    public function insertStudent($dados) {
        $this->setDados($dados);

        $sql = "INSERT INTO student (id, name, email, password, phone, course, status, created_at, updated_at) value 
        (:ID, :NAME, :EMAIL, :PASSWORD, :PHONE, :COURSE, :STATUS, :CREATED_AT, :UPDATED_AT)";

        $stmt = $this->conn->prepare($sql);

        $results = $stmt->execute (
            array (
            ":ID"=>$this->id,
            ":NAME"=>$this->name, 
            ":EMAIL"=>$this->email, 
            ":PASSWORD"=>$this->password, 
            ":PHONE"=>$this->phone, 
            ":COURSE"=>$this->course, 
            ":STATUS"=>$this->status, 
            ":CREATED_AT"=>$this->created_at, 
            ":UPDATED_AT"=>$this->updated_at )
        );

        $count = $stmt->rowCount();
        if ($count>0) return true;
        else return false;
    }


    // LISTAR ESTUDANTES CADASTRADOS

    public function listStudents() {
        try {
            $sql = "SELECT * FROM student ORDER BY name ASC";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
        
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;

        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    // DELETAR CADASTRO ESTUDANTE

    public function deleteStudent($id) {
        $this->id = $id;

        $sql = "DELETE FROM student WHERE id= :ID";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":ID", $this->id);
        $results = $stmt->execute();

        $count = $stmt->rowCount();
        if($count>0) return true;
        else return false;
    }


    // RESGATAR DADOS DE ALUNO

    public function rescueStudent($id) {
        $this->id=$id;
        
        try {
            $sql = "SELECT * FROM student WHERE id = :ID";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':ID', $this->id);
            $stmt->execute();
        
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results[0];

        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    // EDITAR CADASTRO DE ESTUDANTE

    public function editStudent($id, $dados) {
        $this->setDados($dados);
        $this->id = $id;

        $sql = "UPDATE student SET id=:ID, name=:NAME, email=:EMAIL, password=:PASSWORD, phone=:PHONE, course=:COURSE, status=:STATUS, created_at=:CREATED_AT, updated_at=:UPDATED_AT WHERE id=:ID";

        try {      

            $stmt = $this->conn->prepare($sql);

            $stmt->execute (
                array (
                    ':ID'=>$this->id, 
                    ':NAME'=>$this->name, 
                    ':EMAIL'=>$this->email, 
                    ':PASSWORD'=>$this->password, 
                    ':PHONE'=>$this->phone, 
                    ':COURSE'=>$this->course, 
                    ':STATUS'=>$this->status,
                    ':CREATED_AT'=>$this->created_at,     
                    ':UPDATED_AT'=>$this->updated_at )
                );
            $count = $stmt->rowCount();
            return $count ? true: false;
        }catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }      
    }

            
}


?>  