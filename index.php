<html>
    <head>
        <title>Pagina de Cadastro</title>
    </head>
    <body>
        <h1>Cadastro</h1>
        <form action="saida.php" method="POST">
            <p><label>Nome da Banda.: </label></p>
            <p><input type="text" name="banda" value=""/></p>
            <p><label>Link para imagem.: </label></p>
            <p><input type="text" name="link" value="" /></p>
            <?php
            for($i = 1; $i<=3;$i++)
            {
             echo "<p><label>Integrante ".$i." - nome: </label></p>";
             echo "<p><input type='text' name='integrante".$i."-nome' /></p>";
             echo "<p><label>Integrante ".$i." - data nascimento: </label></p>";
             echo "<p><input type='date' name='integrante".$i."-data' /></p>";
             echo "<p><label>Integrante ".$i." - instrumento: </label></p>";
             echo "<p><input type='text' name='integrante".$i."-instrumento' /></p>";  
            }
            ?>
            <p><label>Biografia da banda.: </label></p>
            <p><textarea name="biografia"></textarea></p>
            <p><label>Cor de fundo da pagina.: </label></p>
            <p><select name="cor"><option value="blue">Azul</option><option value="yellow">Amarelo</option><option value="white">Branco</option><option value="black">Preto</option><option value="green">Verde</option><option value="red">Vermelho</option></select></p>
            <p><label>Cor de Texto</label></p>
            <p><select name="cor-texto"><option value="blue">Azul</option><option value="yellow">Amarelo</option><option value="white">Branco</option><option value="black">Preto</option><option value="green">Verde</option><option value="red">Vermelho</option></select></p>
            <input type="submit" name="enviar" value="Gerar Pagina"/>
        </form>
    </body>
</html>

