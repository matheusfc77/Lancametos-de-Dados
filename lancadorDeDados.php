<!DOCTYPE html>
<?php

    $tituloPagina = "Lançador de Dados - V2";
    $titulo = "Lançador de Dados";
    $paragrafo1 = 
        "Teste sua sorte com os dados! Só não vale trapacear!";
    $textoAcao = "";
    $dados = array(
        1 => "imagens/l1.png",
        2 => "imagens/l2.png",
        3 => "imagens/l3.png",
        4 => "imagens/l4.png",
        5 => "imagens/l5.png",
        6 => "imagens/l6.png",
    );
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
        }
    ?>

    <br/>

    <div class="user">
        <h3>Seus Lançamentos</h3>
        
        <div class="box">
            <img src=
                <?php echo "\"".$dados[$lancUsuario1]."\""; ?>/>
            <p>Dado 1</p>
        </div>
        <div class="box">
            <img src=<?php echo "\"".$dados[$lancUsuario2]."\""; ?> hspace="100"/>
            <p style="text-indent:100px;">Dado 2</p>
        </div>

        <h4><?php echo "Total: ".$totUsuario." pontos."; ?></h4>
    </div>

    <br/>

    <div class="computer">
        <h3>Computador</h3>
        
        <div class="box">
            <img src=<?php echo "\"".$dados[$lancComp1]."\""; ?>/>
            <p>Dado 1</p>
        </div>
        <div class="box">
            <img src=<?php echo "\"".$dados[$lancComp2]."\""; ?> hspace="100"/>
            <p style="text-indent:100px;">Dado 2</p>
        </div>

        <h4><?php echo "Total: ".$totComp." pontos."; ?></h4>
    </div>

    <br/>

    <h2>
        <?php
            if ($totUsuario > $totComp) 
                echo "Você Venceu! Parece que está com sorte. Jogue de novo para ganhar mais prêmios!";
            else if ($totUsuario == $totComp) 
                echo "Empate! Dessa vez passou perto. Tente de novo para vencer!";
            else
                echo "Você perdeu! Não desanime, aposto que os dados serão melhores na próxima!" 
        ?>
    </h2>
    
    <style>
        div.box {
            width: 150px;
            display: inline-block;
        }
    </style>

</body>
</html>