<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
    <link REL="SHORTCUT ICON" HREF="imgs/logoif.png" id="logo">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="script.js"></script>
</head>
    <style>
        .message-container {
            background-color: #ffffff;
            border-radius: 2vw;
            padding: 20px;
            box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 10px;
        }

        .back-link {
            display: inline-block;
            color: #007bff;
            text-decoration: none;
            border-bottom: 1px solid #007bff;
            transition: border-bottom 0.2s;
        }

        .back-link:hover {
            border-bottom: none;
        }
        .titulo-content{
            display: flex;						 
            align-content: center;
            justify-content: center;
            align-items: center;
            width: 100%; 
            height: auto;
            background-color: rgb(63, 161, 76);
            border-top-left-radius: 2vw;
            border-top-right-radius: 2vw;
        }

        .content-container{
            background-color: white;
            border-radius: 2vw;
        }
    </style>
<body>

    <div class="header-container">
        
        <div class="logo-header">
            <img src="imgs/logoif.png" id="logo"/>
        </div>
    </div>


    <div class="content-container">

        <div class="titulo-content">
            <h1 id="titulo">Criar Conta</h1>
        </div>            
     <div class="message-container">
        <form action="processamento.php" method="POST">
        <div class="wrapper">
            <div class="form-box login">
                    <div class="input-box">
                        <label>E-mail </label><br>
                        <input type="email" class="input"  required>
                    </div>
                    <div class="input-box">
                        <label>Senha</ion-icon></label><br>
                        <input type="password"  class="input" required>
                    </div>
                    <div class="input-box">
                        <label>Confirmar Senha</ion-icon> </label><br>
                        <input type="password"  class="input" required>
                    </div>
                    <button type="submit" class="btn">Criar</button>
                    <div class="remember">
                        <p>Já tem  uma conta? <a href="#">Entrar</a></p>
                    </div>
            </div>

    </div>
     </div>
            
    </form>
    <script src="static/script/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>
