<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Cadastro de Alunos</title>

        <style type="text/css">

        body { font-size: 14px; background-color: gray; font-family: Arial, Helvetica, sans-serif; text-align:center; }
        .formulario {display:inline-block; width:50%;}
        h1 { background-color:#FFD700;margin-bottom:40px }

        form {width:100%;text-align:left; margin-left:15% }
        input {width:70%; height: 28px; font-size:16px; color:#0000CD; padding-left:10px; margin-top:5px; background-color:#D3D3D3; border:0 none;}
        .radio {width:22px; height:18px}
        .text_radio {font-size:20px;}
        label {font-size:18px; font-weight:bold; }
        .listaCursos {font-size:16px; }


        a {text-decoration: none; font-size: 16px; color:black;  margin-left: 30px; font-weight: bold}
        button { background:#32CD32; border:0 none; border-radius: 5px; font-weight: bold; font-size: 16px; margin-top:15px; padding:7px;}
        </style>


    </head>
  
    <body>

    <div class="formulario">

    <h1>Cadastrar Novo Aluno</h1>

    <form action="controller_student_add.php" method="POST">

    <input type="hidden" name="id"> </p>

    <p> <label for="name">Nome:</label></br>
        <input type="text" id="name" name="name" placeholder="nome completo" required> </p>

    <p> <label for="email">E-mail:</label></br>
        <input type="email" id="email" name="email" placeholder="fulano@algumacoisa.com" required> </p>

    <p> <label for="password">Senha:</label></br>
        <input type="password" id="password" name="password" placeholder="digite uma senha de 8 dígitos" required> </p>

    <p> <label for="phone">Telefone:</label></br>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="99 99999-9999" required> </p>

    <p> <label for="course">Curso:</label></br> 
    <select class="listaCursos" name='course' id='course' required>
                <option>Selecione...</option>
        <?php

            require_once ('../Class/Courses.php');

            $listaCursos = new Courses();
            $cursos = $listaCursos->listCourses();

            foreach ($cursos as $linha) { ?>
                <option><?=$linha['nameCourse']?></option>
            <?php
            }
        ?>
   
    </select>

              
    <p class="text_radio"> <label for="status">Status do Aluno:</label></br>
            <input class="radio" type="radio" name="status" value="ativo" require/> ativo   
            </br><input class="radio" type="radio" name="status" value="inativo"/> inativo </p>
        
    <input type="hidden" name="created_at" value="created_at"> </p>

    <input type="hidden" name="updated_at" value="updated_at"> </p>

    <p> <button type="submit">Cadastrar</button> 
    <a href="page_students.php">Cancelar</a> </p>
     </p>


    </form>

    <div>

    </body>

    </html>




