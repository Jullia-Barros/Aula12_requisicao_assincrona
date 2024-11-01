<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Calculadora AJAX </h1>

    <pre>
        <label> largura </label>
        <input type="number" name="larguraComodo" id="larguraComodo" />

        <label> comprimento </label>
        <input type="number" name="ComprimentoComodo" id="ComprimentoComodo" />

        <button onclick="calcular();"> Calcular com ajax </button>

        <p id="resultado"> </p>
</pre>
<script>
    function calcular(){
        const numero1 = document.getElemetById("numero1").value;
        const numero2 = document.getElementById("numero2").value;

        fetch('/calculo.php' , {
            method: 'POST',
            headers: { 'Content-Type': 'aplication/json'};
            body: JSON.stringify ({
                numero1 = parseFloat(numero1),
                numero2 = parseFloat(numero2)
            })
        })

        .then(resposta => resposta.json())
        .then(dados => {
            document.getElementById("resultado").innerHTML = 
            "Soma: " + dados.soma;
        })
        .catch(erro => {
            document.getElementById("resultado").innerHTML = 
            "Erro ao processar";
        });
    }
</body>
</html>