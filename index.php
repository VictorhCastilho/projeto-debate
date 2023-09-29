<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
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


    <div class="content-container">

        <div class="titulo-content">
            <h1 id="titulo">Avaliação Do Debate</h1>
        </div>


        <form action="processamento.php" method="POST">

        
        <div class="ranking">
            <p>Qual nota, entre 0 e 10, você avalia o debate?</p>
            <ul>
                <li><input type="radio" name="questao1" id="radio0" value="0" required><label><p>0</p></label></li>
                <li><input type="radio" name="questao1" id="radio1" value="1"><label><p>1</p></label></li>
                <li><input type="radio" name="questao1" id="radio2" value="2"><label><p>2</p></label></li>
                <li><input type="radio" name="questao1" id="radio3" value="3"><label><p>3</p></label></li>
                <li><input type="radio" name="questao1" id="radio4" value="4"><label><p>4</p></label></li>
                <li><input type="radio" name="questao1" id="radio5" value="5"><label><p>5</p></label></li>
                <li><input type="radio" name="questao1" id="radio6" value="6"><label><p>6</p></label></li>
                <li><input type="radio" name="questao1" id="radio7" value="7"><label><p>7</p></label></li>
                <li><input type="radio" name="questao1" id="radio8" value="8"><label><p>8</p></label></li>
                <li><input type="radio" name="questao1" id="radio9" value="9"><label><p>9</p></label></li>
                <li><input type="radio" name="questao1" id="radio10" value="10"><label><p>10</p></label></li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <hr>

        <div class="ranking">
            <p>Qual nota, entre 0 e 10, você avalia os participantes?</p>
            <ul>
                <li><input type="radio" name="questao2" id="radio0" value="0" required><label><p>0</p></label></li>
                <li><input type="radio" name="questao2" id="radio1" value="1"><label><p>1</p></label></li>
                <li><input type="radio" name="questao2" id="radio2" value="2"><label><p>2</p></label></li>
                <li><input type="radio" name="questao2" id="radio3" value="3"><label><p>3</p></label></li>
                <li><input type="radio" name="questao2" id="radio4" value="4"><label><p>4</p></label></li>
                <li><input type="radio" name="questao2" id="radio5" value="5"><label><p>5</p></label></li>
                <li><input type="radio" name="questao2" id="radio6" value="6"><label><p>6</p></label></li>
                <li><input type="radio" name="questao2" id="radio7" value="7"><label><p>7</p></label></li>
                <li><input type="radio" name="questao2" id="radio8" value="8"><label><p>8</p></label></li>
                <li><input type="radio" name="questao2" id="radio9" value="9"><label><p>9</p></label></li>
                <li><input type="radio" name="questao2" id="radio10" value="10"><label><p>10</p></label></li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <hr>

        <div class="perguntas">
            <p>Considera essa iniciativa importante para os cursos de Sistemas de Informação?</p>
            <ul>
                <li><input type="radio" name="questao3" id="sim" value="sim"><label><p>Sim</p></label></li>
                <li><input type="radio" name="questao3" id="não" value="nao" required><label><p>Não</p></label></li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <hr>

        <div class="perguntas">
            <p>Gostaria que houvesse outros debates?</p>
            <ul>
                <li><input type="radio" name="questao4" id="sim" value="sim"><label><p>Sim</p></label></li>
                <li><input type="radio" name="questao4" id="não" value="nao" required><label><p>Não</p></label></li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <hr>

        <div class="perguntas">
            <p>Considera o formato do debate apropriado?</p>
            <ul>
                <li><input type="radio" name="questao5" id="sim" value="sim"><label><p>Sim</p></label></li>
                <li><input type="radio" name="questao5" id="não" value="nao" required><label><p>Não</p></label></li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <hr>

        <div class="perguntas">
            <p>Considera o horário do debate apropriado?</p>
            <ul>
                <li><input type="radio" name="questao6" id="sim" value="sim"><label><p>Sim</p></label></li>
                <li><input type="radio" name="questao6" id="não" value="nao" required><label><p>Não</p></label></li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <hr>

        <div class="perguntas">
            <p>Gostaria que o debate fosse transmitido on-line?</p>
            <ul>
                <li><input type="radio" name="questao7" id="sim" value="sim"><label><p>Sim</p></label></li>
                <li><input type="radio" name="questao7" id="não" value="nao" required><label><p>Não</p></label></li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <hr>

        <div class="perguntas">
            <p>Gostaria que os debates ficassem disponíveis on-line depois?</p>
            <ul>
                <li><input type="radio" name="questao8" id="sim" value="sim"><label><p>Sim</p></label></li>
                <li><input type="radio" name="questao8" id="não" value="nao" required><label><p>Não</p></label></li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <hr>

        <div class="perguntas">
            <p>Quais sugestões gostaria de deixar para a organização?</p>
            <br>
            <textarea id="sugestao" maxlength="500" name="sugestao"></textarea>
        </div>
        <br>
        <hr>
        <br>
        <button type="submit" id="botão"><p>Enviar</p></button>
        <br>
        <br>

    </div>
    </form>
</body>
</html>
