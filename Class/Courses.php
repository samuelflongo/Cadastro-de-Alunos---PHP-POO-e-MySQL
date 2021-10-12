<?php

require_once ('../DataBase/Connection.php');

class Courses extends Connection {

    private $id, $nameCourse, $description, $dateStart, $dateFinish, $status, $created_at, $updated_at; 
    public $conn;

    public function __construct(){
        $this->conn = $this->connectDB();
    }

    //CADASTRAR NOVO CURSO

    function setDados($dados) {
        $dados = json_decode($dados);
        $this->id = $dados->id;
        $this->nameCourse = $dados->nameCourse;
        $this->description = $dados->description;
        $this->dateStart = $dados->dateStart;
        $this->dateFinish = $dados->dateFinish;
        $this->status = $dados->status;
        $this->created_at = $dados->created_at;
        $this->updated_at = $dados->updated_at;
    }


    public function insertCourse($dados) {
        $this->setDados($dados);

        $sql = "INSERT INTO course (id, nameCourse, description, dateStart, dateFinish, status, created_at, updated_at) value 
        (:ID, :NAMECOURSE, :DESCRIPTION, :DATESTART, :DATEFINISH, :STATUS, :CREATED_AT, :UPDATED_AT)";

        $stmt = $this->conn->prepare($sql);

        $results = $stmt->execute (
            array (
            ":ID"=>$this->id,
            ":NAMECOURSE"=>$this->nameCourse, 
            ":DESCRIPTION"=>$this->description, 
            ":DATESTART"=>$this->dateStart, 
            ":DATEFINISH"=>$this->dateFinish, 
            ":STATUS"=>$this->status, 
            ":CREATED_AT"=>$this->created_at, 
            ":UPDATED_AT"=>$this->updated_at )
        );

        $count = $stmt->rowCount();
        if ($count>0) return true;
        else return false;
    }

    // LISTAR CURSOS


    public function listCourses() {
        try {
            $sql = "SELECT * FROM course ORDER BY nameCourse ASC";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
        
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;

        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    // DELETAR CURSOS 

    public function deleteCourse($id) {
        $this->id = $id;

        $sql = "DELETE FROM course WHERE id= :ID";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":ID", $this->id);
        $results = $stmt->execute();

        $count = $stmt->rowCount();
        if($count>0) return true;
        else return false;
    }


    // RESGATAR DADOS DE CURSOS

    public function rescueCourse($id) {
        $this->id=$id;
        
        try {
            $sql = "SELECT * FROM course WHERE id = :ID";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':ID', $this->id);
            $stmt->execute();
        
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results[0];

        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    

    // EDITAR CADASTRO DE CURSOS

    public function editCourse($id, $dados) {
        $this->setDados($dados);
        $this->id = $id;
      
        $sql = "UPDATE course SET id=:ID, nameCourse=:NAMECOURSE, description=:DESCRIPTION, dateStart=:DATESTART, dateFinish=:DATEFINISH, status=:STATUS, created_at=:CREATED_AT, updated_at=:UPDATED_AT WHERE id=:ID";

        try {      

            $stmt = $this->conn->prepare($sql);

            $stmt->execute (
                array (
                    ':ID'=>$this->id, 
                    ':NAMECOURSE'=>$this->nameCourse, 
                    ':DESCRIPTION'=>$this->description, 
                    ':DATESTART'=>$this->dateStart, 
                    ':DATEFINISH'=>$this->dateFinish, 
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
