<!DOCTYPE html>
    
    <html>
        <head>
            <style type="text/css">

            body { background-color: gray; text-align:center;}            
            .sucesso {text-align:center; display:inline-block; padding-top: 30px; padding-bottom:20px; margin-top: 8%; font-size:30px; border: solid black 2px; height:120px; width:50%; }
            .erro {color:red; text-align:center; display:inline-block; padding-top: 30px; padding-bottom:20px; margin-top: 8%; font-size:30px; border: solid black 2px; height:120px; width:50%; }
            .falha {color:red; text-align:center; display:inline-block; padding-top: 30px; padding-bottom:20px; margin-top: 8%; font-size:30px; border: solid black 2px; height:120px; width:50%; }
            .link { font-size: 18px; }
            a { text-decoration:none; color:orange; }
            a:visited { text-decoration:none; color:orange; }
            a:hover { text-decoration:none; color:green; }
            a:active { text-decoration:none; color:green; }


            </style>
        </head>
    <body>

    <?php

if($_GET) {
    if(isset($_GET["resposta"]) && !empty($_GET["resposta"]) && isset($_GET["mensagem"]) && !empty($_GET["mensagem"])) {
        $resposta=$_GET["resposta"];
        $mensagem=$_GET["mensagem"];
            if ($resposta=="Sucesso") {
            ?>
            <div class="sucesso" role="alert">
                <?=$mensagem;?>
                <p><a href="../index.php">Voltar</a></p>
            </div>
            <?php
            } elseif($resposta=="Erro") {
            ?>
            <div class="erro" role="alert">
                <?=$mensagem;?>
                <p><a href="../index.php">Voltar</a></p>
            </div>
            <?php     
            } else {
            ?>
            <div class="falha" role="alert">
                Desculpe, mas houve uma falha na aplicação
                <p><a href="../index.php">Voltar</a></p>
            </div>
            <?php
            }
    }
}        

            ?>
</body>
</html>