<?php
    //CONECTANDO AO BANCO DE DADO
    include_once("connectbd.php");
    //RECEBENDO OS DADOS DO FORMULARIO "CADASTRO DE AFILIADOS"
    $nomeAfiliado  = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);//$_POST["nome"];
    $emailAfiliado = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);//$_POST["email"];
    $cpfAfiliado   = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_STRING);//$_POST["cpf"];
    $dataAfiliacao = filter_input(INPUT_POST,'data-afiliacao',FILTER_SANITIZE_STRING);//$_POST["data-afiliacao"];
    

    //echo $nomeAfiliado.'<br>'. $emailAfiliado.'<br>'. $cpfAfiliado.'<br>'.$dataAfiliacao.'<br>'.$valorAnuidade.'R$'.'<br>'.$anoCorrente;


    $result_filiado = "insert into cadastro_afiliados (nome, email, cpf, dataAfiliacao) value ('$nomeAfiliado', '$emailAfiliado', '$cpfAfiliado', '$dataAfiliacao')";
    $resultado_filiado = mysqli_query($connec, $result_filiado);

    header("location:index.php");

    //$result_anuidade = "insert into anuidade_cadastro (cpf, ano, valor) value ('$cpfAfiliado','$anoCorrente','$valorAnuidade')";
    //$resultado_anuidade = mysqli_query($connec, $result_anuidade);

    
    //$devedor = "Anuidade Pendente";
    //$ano = $anoCorrente;

   
    
   

    //function cott(){
      // return header("location:cadastro_anuidade.php");
    //}

    

    


    
?>