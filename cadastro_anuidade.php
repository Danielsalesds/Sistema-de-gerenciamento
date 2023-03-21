<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="./css/style.css">
    <title>Cadatro de Anuidade dos Afiliados </title>
</head>
<body>
        <div id="main-container">
            <h1>Cadastro de Anuidades</h1>
            <form id="register-form" method="post" action = "salvar_anuidade.php">
                <div class="half-box spacing">
                    <lable for="nome">Ano</lable>
                    <input type="text" name="ano-anuidade" id="email" placeholder="Digite o Ano" data-min-length="3">
                </div>
                <div class="half-box spacing">
                    <lable for="email">Valor</lable>
                    <input type="text" name="valor-anuidade" id="nome" placeholder="Digite o Valor">
                </div>
                <div class="full-box spacing">
                <input type="submit"  id="btn-submit" value="Cadastrar Anuidades"  >       
            </div>
            <div class="hlaf-box spacing">
                <lable for="agreement" id="agreement-label"><a href="index.php">Cadastro de Afiliados</a></lable>
            </div>
            <div class="half-box">
                <lable for="agreement" id="agreement-label">|  <a href="relatorio.php">Relatorio</a></lable>
            </div>
            </form>
        </div>
</body>
</html>