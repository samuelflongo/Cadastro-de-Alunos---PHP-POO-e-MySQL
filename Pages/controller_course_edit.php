<?php

require_once('../Class/Courses.php');

$course = new Courses();

// controle edição

$id=$_POST['id'];

$dados=[
    'id'=>$_POST["id"],
    'nameCourse'=>$_POST["nameCourse"],
    'description'=>$_POST["description"],
    'dateStart'=>$_POST["dateStart"], 
    'dateFinish'=>$_POST["dateFinish"], 
    'status'=>$_POST["status"],
    'created_at'=>$_POST["created_at"],
    'updated_at'=>NULL
];

$dados=json_encode($dados);
$editCourse=$course->editCourse($id, $dados);


if($editCourse) header('location:msg_edit.php?resposta=Sucesso&mensagem=Dados do Curso Alterado com sucesso');
else header('location:msg_edit.php?resposta=Erro&mensagem=Erro ao Alterar dados');


?>