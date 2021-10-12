<?php

require_once('../Class/Courses.php');

$course = new Courses();

// controle exclusão

$id=$_GET["id"];
$exclude = $course->deleteCourse($id);

if($exclude) header('location:msg_delete.php?resposta=Sucesso&mensagem=Curso excluído com sucesso');
else header('location:msg_delete.php?resposta=Erro&mensagem=Erro ao excluir curso');
?>

