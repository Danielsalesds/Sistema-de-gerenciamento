<?php
    include_once("connectbd.php");
    //include_once("salver.php");

    //RECEBENDO DADOS DO FORMULARIO "cADASTRO DE ANUIDADES"
    $valorAnuidade = filter_input(INPUT_POST,'valor-anuidade',FILTER_SANITIZE_STRING);//$_POST["valor-anuidade"];
    $anuidadeAno   = filter_input(INPUT_POST,'ano-anuidade',FILTER_SANITIZE_STRING);//$_POST["ano"];
    $devedor = "";

    echo $valorAnuidade.'<br>'. $anuidadeAno;

    $result_anuidade = "insert into anuidade_cadastro (ano, valor) value ('$anuidadeAno','$valorAnuidade')";
    $resultado_anuidade = mysqli_query($connec, $result_anuidade);


    header("location:cadastro_anuidade.php");


    





?>