
<!DOCTYPE html>
<html lang="tp-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="./css/style.css">
    <title>Cadastrar Afiliados</title>
</head>
<body>
    <div id="main-container">
        <h1>Cadastro de Afiliados</h1>
        <form id="register-form" method="post" action = "salvar.php">
            <div class="full-box">
                <lable for="nome">Nome Completo</lable>
                <input type="text" name="nome" id="email" placeholder="Digite seu nome completo" data-min-length="3">
            </div>
            <div class="full-box spacing">
                <lable for="email">Email</lable>
                <input type="text" name="email" id="nome" placeholder="Digite seu e-mail">
            </div>
            
            <div class="half-box spacing">
                <lable for="cpf">CPF</lable>
                <input type="text" name="cpf" id="password" placeholder="Digite seu CPF">
            </div>
            <div class="half-box">
                <lable for="data-afiliacao">Data de Afiliação</lable>
                <input type="date" name="data-afiliacao" id="passconfirmation" placeholder="Informe sua data de afiliação">
            </div>
            <div class="full-box spacing">
                <input type="submit"  id="btn-submit" value="Cadastrar Afiliados"  >       
            </div>
            <div class="full-box">
                <lable for="agreement" id="agreement-label">Você pode cadastrar anuidades clicando em:<a href="cadastro_anuidade.php">Cadastrar Anuidades</a></lable>
                
            </div>

            
      
            
        </form>
   </div>
    
</body>
</html>