<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/design.css">
    <title>Instagram</title>
</head>
<body>
    <div class="containerPrincipal">
        <div class="group1">
            <img src="./img/instagram-celular.png" alt="instagram-phone">
        </div>
        <div class="group2">
            <div class="bloco1 responsive">
                <form action="./php/apiDados.php" method="POST">
                    <div class="gp2FlexboxSet imgLogoCont">
                        <img src="./img/instagram-logo.png" alt="instagram-logo">
                    </div>
                    <div class="gp2FlexboxSet dadosContainer">
                        <input type="text" name="emailInp" class="inp email" placeholder="Telefone, nome de usuário ou email">
                        <input type="password" name="senhaInp" class="inp senha" placeholder="Senha">
                    </div>
                    <div class="gp2FlexboxSet btnLogarCont">
                        <input type="submit" name="btnLogin" class="btnLogar" value="Iniciar sessão">
                    </div>  
                </form> 
            </div>
            <div class="bloco2 responsive">
                <p>Não tem uma conta? <a href="https://www.instagram.com/accounts/emailsignup/"><b>Cadastre-se</b></a></p>
            </div>
            <div class="bloco3 responsive">
                <div class="tituloBl3">
                    <p>Patrocinadores</p>
                </div>
                <div class="imgPatrocinioCont">
                    <img src="./img/logoDIO.svg" alt="DIO">
                </div>
            </div>
        </div>
    </div>
</body>
</html>