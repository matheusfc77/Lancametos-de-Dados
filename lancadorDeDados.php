<!DOCTYPE html>
<?php

    $tituloPagina = "Lançador de Dados - V2";
    $titulo = "Lançador de Dados";
    $paragrafo1 = 
        "Teste sua sorte com os dados! Só não vale trapacear!";
    $textoAcao = ""
?>
<html>
<head>
    <meta charset="UTF-8"/>
    <title><?php echo $tituloPagina ?></title>
</head>
<body>
    <h1><?php echo $titulo ?></h1>

    <p><?php echo $paragrafo1 ?></p>
        
    <form method="get">
        <input type="submit" name="button1"
                value="Lançar os dados!"/>
    </form>

    <?php
        $lancUsuario1 = 0;
        $lancUsuario2 = 0;
        $lancComp1 = 0;
        $lancComp2 = 0;
        $totUsuario = 0;
        $totComp = 0;

        if(isset($_GET['button1'])) {
            $lancUsuario1 = rand(1, 6);
            $lancUsuario2 = rand(1, 6);
            $lancComp1 = rand(1, 6);
            $lancComp2 = rand(1, 6);
            $totUsuario = $lancUsuario1 + $lancUsuario2;
            $totComp = $lancComp1 + $lancComp2;

            echo "<br>L1 U: ".$lancUsuario1."<br>";
            echo "L2 U: ".$lancUsuario2."<br>";
            echo "L1 C: ".$lancComp1."<br>";
            echo "L2 C: ".$lancComp2."<br>";
            echo "TT U: ".$totUsuario."<br>";
            echo "TT C: ".$totComp."<br>";
        }

        //echo $textoAcao;
    ?>
    
</body>
</html>