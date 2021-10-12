<?php

require_once('../Class/Student.php');

$student = new Student();

// controle exclusão

$id=$_GET["id"];
$exclude = $student->deleteStudent($id);

if($exclude) header('location:msg_delete.php?resposta=Sucesso&mensagem=Cadastro excluído com sucesso');
else header('location:msg_delete.php?resposta=Erro&mensagem=Erro ao excluir cadastro');
?>

