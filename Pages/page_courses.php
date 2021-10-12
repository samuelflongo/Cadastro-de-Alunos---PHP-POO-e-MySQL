<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Sistema de Cursos</title>

        <style type="text/css">

            body { font-size: 14px; background-color: gray; font-family: Arial, Helvetica, sans-serif; text-align:center; }
            h2 { background-color:#FFD700; }

            table {border:solid 1px gray; border-collapse:collapse;width: 100%;}
            tbody {background-color:white;}
            thead {background-color:orange; }
            th, td, tr {padding-top:10px; padding-bottom:10px;}
            tr {border:solid 1px gray;}

            tr:hover {background-color:#F0E68C;}
            thead tr:hover {background-color:orange;}
            .descricao {font-size:11px;padding:5px 20px 5px 20px;}
            
            a { text-decoration:none; color:white; }
            a:visited { text-decoration:none; color:white; }
            a:hover { text-decoration:none; color:gray; }
            a:active { text-decoration:none; color:gray; }

            .cadastrar { display:inline-flex; font-size: 18px; background-color:#008080; padding:6px; border-radius:15px; margin:15px;}
            .editar {display:inline;font-size: 10px; background-color:#32CD32; padding:4px;border-radius:10px;}
            .excluir {display:inline;font-size: 10px; background-color:#FF6347; padding:4px; border-radius:10px;}

            .retornar { display:inline-block; font-size: 18px; background-color:#5F9EA0; padding:6px; border-radius:15px; margin:15px;}

            </style>
    </head>

    <body>        

        <div class="retornar"><a href="../index.php">PAINEL DE CONTROLE</a></div>

        <div class="cadastrar"><a href="manip_courses.php">CADASTRAR NOVO CURSO</a></div>
        <h2 class="titulo">Cursos Cadastrados</h2>
        <div><table>
            <colgroup>
                <col style="width:%">
                <col style="width:%">
                <col style="width:%">
                <col style="width:30%">
                <col style="width:%">
                <col style="width:%">
                <col style="width:%">
                <col style="width:%">
                <col style="width:%">
                <col style="width:%">
                <col style="width:%">

            </colgroup>  
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">CURSO</th>
                    <th scope="col">ID</th>
                    <th scope="col"></th>
                    <th scope="col">INÍCIO</th>
                    <th scope="col">FIM</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">CADASTRADO EM</th>
                    <th scope="col">ATUALIZADO EM</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
            </thead>

                    <?php
                    include_once('../Class/Courses.php');
                    $catalogo = new Courses();
                    $course = $catalogo->listCourses();

                    $i=1;
                    foreach ($course as $linha) {
                    ?>

                <tr>
                    <th scope="row"><?=$i++?></th>
                    <td><?=$linha['nameCourse']?></td>
                    <td><?=$linha['id']?></td>
                    <td class="descricao"><?=$linha['description']?></td>
                    <td><?=$linha['dateStart']?></td>
                    <td><?=$linha['dateFinish']?></td>
                    <td><?=$linha['status']?></td>
                    <td><?=$linha['created_at']?></td>
                    <td><?=$linha['updated_at']?></td>

                    <td>
                        <div class="editar"><a href="manip_courses_edit.php?id=<?=$linha['id']?>" role="button">EDITAR</a></div>
                        <div class="excluir"><a href="controller_course_delete.php?id=<?=$linha['id']?>" role="button">EXCLUIR</a></div>
                    </td>
                </tr>

                    <?php
                    }
                    ?>
        </table></div>

            

    </body>

</html>