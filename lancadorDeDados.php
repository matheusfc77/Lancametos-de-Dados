<!DOCTYPE html>
<?php
    $tituloPagina = "Lançador de Dados - V1";
    $saudacao = "Fala Curvelo!";
    $paragrafo1 = 
        "Para ser cincero, nunca gostei muito da parte web. Em grande parte porque boa parte do trabalho <br/>
        é estilização, layout de páginas, etc. Dito isso, até que estou gostando de mexer com PHP <br/>
        (só não espere páginas com bons visuais vindos de mim, não tenho pasciência com CSS para isso :) ).";
    $textoAcao = ""
?>
<html>
<head>
    <meta charset="UTF-8"/>
    <title><?php echo $tituloPagina ?></title>
</head>
<body>
    <h1><?php echo $saudacao ?></h1>

    <p><?php echo $paragrafo1 ?></p>
        
    <form method="post">
        <input type="submit" name="button1"
                value="Let's go!"/>
    </form>

    <?php

        if(isset($_POST['button1'])) {
            $textoAcao = "<br/> <h3>Bora começar o lançador de dados!</h3>";

            for ($x = 3; $x >= 0; $x--){
                echo "<br/> Contagem: ".$x."<br>";
            }
        }

        echo $textoAcao;
    ?>
    
</body>
</html>