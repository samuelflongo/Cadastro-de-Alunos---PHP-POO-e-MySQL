<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Cadastro de Cursos</title>
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
  
    <body>
    
    <div class="formulario">

    <h1>Cadastrar Novo Curso</h1>

    <form action="controller_course_add.php" method="POST">

    <input type="hidden" name="id"> </p>

    <p> <label for="nameCourse">Nome do Curso:</label></br>
        <input type="text" id="nameCourse" name="nameCourse" required> </p>

    <p> <label for="description">Descrição do Curso:</label></br>
        <textarea name="description" rows="10" id="description" required></textarea> </p>

    <p> <label for="dateStart">Data de Início:</label></br>
        <input type="date" id="dateStart" name="dateStart" required> </p>

    <p> <label for="dateFinish">Data de Término:</label></br>
        <input type="date" id="dateFinish" name="dateFinish" required> </p>

    
    <p class="text_radio"> <label for="status">Status do Curso:</label></br>
            <input class="radio" type="radio" name="status" value="i" require/> Iniciado   
            </br><input class="radio" type="radio" name="status" value="ni"/> Não Iniciado </p>
        
    <input type="hidden" name="created_at" value="created_at"> </p>

    <input type="hidden" name="updated_at" value="updated_at"> </p>

    <p> <button type="submit">Cadastrar</button> 
    <a href="page_courses.php">Cancelar</a> </p>
     </p>


    </form>

    <div>

    </body>

    </html>




