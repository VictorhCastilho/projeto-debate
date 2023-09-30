<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradecimento</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
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
        .header-container{
            display: flex;						 
            align-content: center;
            justify-content: center;
            align-items: center;
            width: 100%; 
            height: auto;  
            margin: 0 auto;
            gap: 3vw;
        }
        body{
            padding: 10px;
            font-family: 'Nunito', sans-serif;
            text-align: center;
            background-color: rgb(226, 233, 231);
            
        }
    </style>
</head>
<body>
    <div class="header-container">
        
        <div class="logo-header">
            <img src="imgs/logoif.png" id="logo"/>
        </div>
    </div>
    <div class="content-container">
        <div class="titulo-content">
            <h1 id="titulo">Avaliação Do Debate</h1>
        </div>
        <div class="message-container">
            <h1>Obrigado pelo feedback!</h1>
        </div>
    </div>
</body>
</html>