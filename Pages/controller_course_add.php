<?php

require_once('../Class/Courses.php');

$course = new Courses();

//controle cadastro

$dados=[
    'id'=>$_POST["id"],
    'nameCourse'=>$_POST["nameCourse"],
    'description'=>$_POST["description"],
    'dateStart'=>$_POST["dateStart"], 
    'dateFinish'=>$_POST["dateFinish"], 
    'status'=>$_POST["status"],  
    'created_at'=>NULL,
    'updated_at'=>NULL
];

$dados=json_encode($dados);

$addCourse=$course->insertCourse($dados);

if($addCourse) header('location:msg_add.php?resposta=Sucesso&mensagem=Curso cadastrado com Sucesso');
else header('location:msg_add.php?resposta=Erro&mensagem=Erro ao cadastrar curso');



?>