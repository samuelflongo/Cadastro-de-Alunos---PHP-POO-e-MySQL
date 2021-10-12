<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Sistema de Alunos</title>

        <style type="text/css">

        body { font-size: 14px; background-color: gray; font-family: Arial, Helvetica, sans-serif; text-align:center; }
        .formulario {display:inline-block; width:50%;}
        h1 { background-color:#FFD700;margin-bottom:40px }
        .text_course {font-size:18px; font-weight:bold; color:#0000CD; }
        .text {font-size:18px; font-weight:bold; }


        form {width:100%;text-align:left; margin-left:15% }
        input {width:70%; height: 28px; font-size:16px; color:#0000CD; padding-left:10px; margin-top:5px; background-color:#D3D3D3; border:0 none;}
        .radio {width:22px; height:18px}
        .text_radio {font-size:20px; }
        label {font-size:18px; font-weight:bold; }
        .listaCursos {font-size:16px; }

        a {text-decoration: none; font-size: 16px; color:black;  margin-left: 30px; font-weight: bold}
        button { background:#32CD32; border:0 none; border-radius: 5px; font-weight: bold; font-size: 16px; margin-top:15px; padding:7px;}
        </style>

    </head>

    <?php
    include_once ('../Class/Student.php');

    $id=$_GET["id"];

    $students = new Student();
    $student = $students->rescueStudent($id);

    ?>
  
    <body>

    <div class="formulario">

    
    <h1>Alterar dados do Aluno</h1>


    <form action="controller_student_edit.php" method="POST">

    <input type="hidden" name="id" value="<?=$student['id']?>">

    <p> <label for="name">Nome:</label></br>
        <input type="text" id="name" name="name" value="<?=$student['name']?>" required> </p>

    <p> <label for="email">E-mail:</label></br>
        <input type="email" id="email" name="email" value="<?=$student['email']?>"  required> </p>

    <p> <label for="password">Senha:</label></br>
        <input type="password" id="password" name="password" value="<?=$student['password']?>" required> </p>

    <p> <label for="phone">Telefone:</label></br>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" value="<?=$student['phone']?>" required> </p><br>

        <p><span class="text">Curso atual: </span><span class="text_course"> <?=$student['course']?></span> </p>

        <p> <label for="course"> Transferir para o Curso: </label></br> 
            <select class="listaCursos" name='course' id='course' required>
                <option> Selecione...</option>
        <?php

            require_once ('../Class/Courses.php');

            $listaCursos = new Courses();
            $cursos = $listaCursos->listCourses();

            foreach ($cursos as $linha) { ?>
                <option  value="<?=$linha['nameCourse']?>"><?=$linha['nameCourse']?></option>
            <?php
            }
        ?>
   
    </select><br><br>

    <p><span class="text">Status atual: </span><span class="text_course"> <?=$student['status']?></span> </p>
    <p class="text_radio"> <label for="status">Novo Status:</label></br>
        <input class="radio" type="radio" name="status" value="ativo" required> ativo
        </br><input class="radio" type="radio" name="status" value="inativo"/> inativo </p>
        
    <input type="hidden" name="created_at" value="<?=$student['created_at']?>">

    <input type="hidden" name="updated_at">

    <p> <button type="submit">Alterar</button>
    <a href="page_students.php">Cancelar</a> </p>


    </form>

    </div>

    </body>

    </html>




