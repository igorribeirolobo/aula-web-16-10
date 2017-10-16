<html>
    <head>
        <style>
            p{
                color:<?php echo $_POST['cor-texto'];?>;
            }
            </style>
    </head>
    <body bgcolor="<?php echo $_POST['cor'];?>">
    <center><h1><?php echo $_POST['banda'];?></h1></center><br />
    <img src="<?php echo $_POST['link'];?>"/>
    <hr />
    <h2><b>Biografia</b></h2><br />
    <p><?php echo $_POST['biografia'];?></p><br />
    
    <table border="1px">
        <tr><th>Nome</th><th>Data Nascimento</th><th>Instrumento</th></tr>
            <?php
            for($i = 1; $i <=3;$i++)
            {
                echo "<tr><td>".$_POST['integrante'.$i.'-nome']."</td><td>".$_POST['integrante'.$i.'-data']."</td><td>".$_POST['integrante'.$i.'-instrumento']."</td></tr>";
            }
            ?>
    </table>
    </body>
</html>