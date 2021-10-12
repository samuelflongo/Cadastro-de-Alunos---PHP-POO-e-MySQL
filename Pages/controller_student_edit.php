<?php

require_once('../Class/Student.php');

$student = new Student();

// controle edição

$id=$_POST['id'];

$dados=[
    'id'=>$_POST["id"],
    'name'=>$_POST["name"],
    'email'=>$_POST["email"],
    'password'=>$_POST["password"], 
    'phone'=>$_POST["phone"], 
    'course'=>$_POST["course"], 
    'status'=>$_POST["status"],
    'created_at'=>$_POST["created_at"],
    'updated_at'=>NULL
];

$dados=json_encode($dados);
$editStudent=$student->editStudent($id, $dados);


if($editStudent) header('location:msg_edit.php?resposta=Sucesso&mensagem=Cadastro Alterado com sucesso');
else header('location:msg_edit.php?resposta=Erro&mensagem=Erro ao Alterar cadastro');


?>