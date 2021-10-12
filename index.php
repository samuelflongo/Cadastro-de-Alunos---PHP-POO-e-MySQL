<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Sistema de Alunos e Cursos</title>

        <style type="text/css">
            body { font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align:center; }
            h1 {color:white; background-color:#008080; padding:6px; border-radius:15px; margin:15px;}

            a {text-decoration:none; color:black; font-weight: bold; font-size:20px}
            a:hover {text-decoration:none; color:gray; font-weight: bold; font-size:20px}

            .sistemas {display:inline-block; width:28%; margin-top: 50px}

            .data {display:inline-block;font-size: 18px; margin-top:70px; color:white; background-color:#FF8C00; padding:8px 12px 8px 12px; border-radius:15px;}


        </style>
        

        
    </head>
  
    <body>

        <header>

        <div>
            <img src="img/painel_controle.jpg" height="150px"></img>
            <h1>PAINEL DE CONTROLE</h1>
        </div>

        </header>

        

        <main>
        <?php
            if (isset($_GET["pagina"]) && !empty($_GET["pagina"])) {
                $pagina = $_GET["pagina"];
                include ($pagina);

            }  else { ?>
                
                    <div class="sistemas">
                        <a href="Pages/page_students.php"><img src="img/estudante.png" height="70px"></img><br>SISTEMA DE ALUNOS</a>
                    </div>
                    <div class="sistemas">
                        <a href="Pages/page_courses.php"><img src="img/curso.png" height="70px"></img><br>SISTEMA DE CURSOS</a>
                    </div>
  
            <?php            
            }            
        ?>


        </main>

        <footer>
            <?php
                date_default_timezone_set('America/Sao_Paulo');
                echo '<span class="data">'. date("d/m/Y h:i:s") . '</span>';
            ?>
        </footer>


    </body>

    </html>