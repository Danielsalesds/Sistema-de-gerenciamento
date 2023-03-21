<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="./style_relatorio.css">
    <title>Relatorio de pendências</title>
</head>
<body>
    <h1>Relatorio de Anuidades Pendentes</h1>
    <div class="tbl">
    <table >
        <tr>
            <td><strong>NOME</strong></td>
            <td><strong>E-MAIL</strong></td>
            <td><strong>CPF</strong></td>
            <td><strong>DATA</strong></td>
            <td><strong>ANUIDADE</strong></td>
        </tr>
        <?php
        include("connectbd.php");
        $seleciona = mysqli_query($connec, "select * from cadastro_afiliados order by id desc");
        while ($campo = mysqli_fetch_array($seleciona)) {?>
            <tr>
                <td><?=$campo["nome"]?></td>
                <td><?=$campo["email"]?></td>
                <td><?=$campo["cpf"]?></td>
                <td><?=$campo["dataAfiliacao"]?></td>
                <td><?=$campo[""]?></td>
            </tr>
            
        <?php }?>
        
        
    </table>

    </div>
    
    
    
</body>
</html>