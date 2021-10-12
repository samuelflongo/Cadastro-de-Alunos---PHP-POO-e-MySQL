<?php

require_once('../Class/Student.php');

$student = new Student();

//controle cadastro

$dados=[
    'id'=>$_POST["id"],
    'name'=>$_POST["name"],
    'email'=>$_POST["email"],
    'password'=>$_POST["password"], 
    'phone'=>$_POST["phone"], 
    'course'=>$_POST["course"], 
    'status'=>$_POST["status"],  
    'created_at'=>NULL,
    'updated_at'=>NULL
];

$dados=json_encode($dados);

$addStudent=$student->insertStudent($dados);

if($addStudent) header('location:msg_add.php?resposta=Sucesso&mensagem=Aluno cadastrado com Sucesso');
else header('location:msg_add.php?resposta=Erro&mensagem=Erro ao cadastrar Aluno');



?>