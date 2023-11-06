<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link REL="SHORTCUT ICON" HREF="imgs/logoif.png" id="logo">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="script.js"></script>
</head>
<body>

    <div class="header-container">
        
        <div class="logo-header">
            <img src="imgs/logoif.png" id="logo"/>
        </div>
    </div>


    <div class="content-container-login">

        <div class="titulo-content">
            <h1 id="titulo">Logar</h1>
        </div>
        <form action="processamento.php" method="POST">
        <div class="meio">
            <div class="wrapper">
                <div class="form-box login">
                        <div class="input-box">
                            <label>E-mail  :</label><br>
                            <input type="email" class="input"  required>
                        </div>
                        <div class="input-box">
                            <label>Senha  :</label><br>
                            <input type="password"  class="input" required>
                        </div>
                        <div class="remember">
                            <p>Lembra de mim? <a href="#">Esqueci Senha</a></p>
                        </div>
                        <button type="submit" class="btn">Entrar</button>
                        <div class="remember">
                            <p>Ainda não tem uma conta? <a href="#">Criar Conta</a></p>
                        </div>
                </div>
        </div>
    </div>
<script src="static/script/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</form>
</body>
</html>
