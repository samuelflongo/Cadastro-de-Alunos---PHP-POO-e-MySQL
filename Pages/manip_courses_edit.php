<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Sistema de Alunos</title>
        <link rel="stylesheet" href="css/reset.css" type="text/css" />
        <link rel="stylesheet" href="css/estilo.css" type="text/css" />

        <style type="text/css">

        body { font-size: 14px; background-color: gray; font-family: Arial, Helvetica, sans-serif; text-align:center; }
        .formulario {display:inline-block; width:50%;}
        h1 { background-color:#FFD700;margin-bottom:40px }

        form {width:100%;text-align:left; margin-left:15% }
        input {width:70%; height: 28px; font-size:16px; color:#0000CD; padding-left:10px; margin-top:5px; background-color:#D3D3D3; border:0 none;}
        textarea {width:70%; height: 120px; font-size:16px; color:#0000CD; padding-left:10px; padding-right:10px; padding-top:10px; margin-top:5px;background-color:#D3D3D3; border:0 none; resize: none; font-family: Arial, Helvetica, sans-serif; }
        .radio {width:22px; height:18px}
        .text_radio {font-size:20px;}
        label {font-size:18px; font-weight:bold; }

        a {text-decoration: none; font-size: 16px; color:black;  margin-left: 30px; font-weight: bold}
        button { background:#32CD32; border:0 none; border-radius: 5px; font-weight: bold; font-size: 16px; margin-top:15px; padding:7px;}

        </style>

    </head>

    <?php
    include_once ('../Class/Courses.php');

    $id=$_GET["id"];

    $courses = new Courses();
    $course = $courses->rescueCourse($id);

    ?>
  
    <body>

    <div class="formulario">

    
    <h1>Alterar dados do Curso</h1>


    <form action="controller_course_edit.php" method="POST">

    <input type="hidden" name="id" value="<?=$course['id']?>">

    <p> <label for="nameCourse">Nome do Curso:</label></br>
        <input type="text" id="nameCourse" name="nameCourse" value="<?=$course['nameCourse']?>" required> </p>

    <p> <label for="description">Descrição do Curso:</label></br>
        <textarea name="description" rows="10" id="description" required><?=$course['description']?></textarea> </p>

    <p> <label for="dateStarf">Início:</label></br>
        <input type="date" id="dateStart" name="dateStart" value="<?=$course['dateStart']?>" required> </p>

    <p> <label for="dateFinish">Fim:</label></br>
        <input type="date" id="dateFinish" name="dateFinish" value="<?=$course['dateFinish']?>" required> </p>

    
    <p class="text_radio"> <label for="status">Status do Aluno:</label></br>
            <input class="radio" type="radio" name="status" value="i" required/> Iniciado
            </br><input class="radio" type="radio" name="status" value="ni"/> Não Iniciado </p>
        
    <input type="hidden" name="created_at" value="<?=$course['created_at']?>">

    <input type="hidden" name="updated_at">

    <p> <button type="submit">Alterar</button>
    <a href="page_courses.php">Cancelar</a> </p>


    </form>

    </div>

    </body>

    </html>




