<?php
include_once("conexao.php");
include('verificar-login.php');
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">


    <title>FATEC-AM Championship</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><strong>FATEC-AM</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" style="padding: 18px;">
                <li class="nav-item active">
                    <a style="color: white; padding: 8px; font-size: 18px; text-decoration:none" href="PaginaInicial.html">Salas</a>
                </li>
                <li class="nav-item active">
                    <a style="color: white; padding: 8px; font-size: 18px; text-decoration:none"
                        href="Desafios.php">Desafios</a>
                </li>
                <li class="nav-item active">
                    <a style="color: white; padding: 8px; font-size: 18px; text-decoration:none" href="#">Contato</a>
                </li>
                <li class="nav-item active">
                    <a style="color: white; padding: 8px; font-size: 18px; text-decoration:none"
                        href="index.php">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <section class="Programming">

        <div class="enviarBTN">
            <button onclick="enviar()" class="btnEnv"><img class="BtnEnviar" src="https://www.flaticon.com/svg/static/icons/svg/860/860826.svg" width="90%" height="90%"></button>
            <h1 class="env">Enviar</h1>
        </div>

        <div class="CircleOff">
            <img class="ImgProgramming" src="https://www.flaticon.com/svg/static/icons/svg/867/867746.svg" width="80px"
                height="80px" alt="">
        </div>

        
        <h1 class="Title">Programação</h1>

    </section>

    <section class="Exercises">

        <h1 class="TitleExercises">Exercício 1</h1>
        <div class="Categories">
            <h1 class="Ex1">String - 4pts</h1>
        </div>

        <div class="Submit">
            <h1 class="Ex2">Intermediário</h1>
        </div>


        <br>
        <br>
        <div class="contentCrypto">
            <h1 class="NameChallenge">Criptografia</h1>
            <h3 class="NameChallenge1">Feito por Neilor Tonin, Brasil</h3>
            <h4 class="NameChallenge1">Limite de 15 tentativas</h4>

            <hr class="Sep1" />

            <h3 class="Descrição">Descrição:</h3>

            <p class="Parag1">Solicitaram para que você construisse um programa simples de criptografia. Este programa
                deve possibilitar enviar mensagens codificadas sem que alguém consiga lê-las. O processo é muito
                simples. São feitas três passadas em todo o texto.</p>
            <p class="Parag2">Na primeira passada, somente caracteres que sejam letras minúsculas e maiúsculas devem ser
                deslocadas 3 posições para a direita, segundo a tabela ASCII: letra 'a' deve virar letra 'd', letra 'y'
                deve virar caractere '|' e assim sucessivamente. Na segunda passada, a linha deverá ser invertida. Na
                terceira e última passada, todo e qualquer caractere a partir da metade em diante (truncada) devem ser
                deslocados uma posição para a esquerda na tabela ASCII. Neste caso, 'b' vira 'a' e 'a' vira '`'.</p>
            <p class="Parag3">Por exemplo, se a entrada for “Texto #3”, o primeiro processamento sobre esta entrada
                deverá produzir “Wh{wr #3”. O resultado do segundo processamento inverte os caracteres e produz “3#
                rw{hW”. Por último, com o deslocamento dos caracteres da metade em diante, o resultado final deve ser
                “3# rvzgV”.</p>
            <hr class="Sep2" />
            <h3 class="Input">Entrada</h3>
            <p class="Parag4">A entrada contém vários casos de teste. A primeira linha de cada caso de teste contém um
                inteiro N (1 ≤ N ≤ 1*104), indicando a quantidade de linhas que o problema deve tratar. As N linhas
                contém cada uma delas M (1 ≤ M ≤ 1*103) caracteres.</p>
            <hr class="Sep3" />

            <h3 class="Output">Saida</h3>

            <table class="table" style="position:relative; top: -150px;">
                <thead>
                    <tr style="color: white;">
                        <th scope="col">Exemplos de entrada</th>
                        <th scope="col">Exemplos de saida</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="color: white;">
                        <td>4</td>
                        <td>3# rvzgV</td>
                    </tr>
                    <tr style="color: white;">
                        <td>Texto #3</td>
                        <td>ks. \n{frzx</td>
                    </tr>
                    <tr style="color: white;">
                        <td>abcABC1</td>
                        <td>vxpdylY .ph</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
<br>
<br>
<br>
<br>
<br>
<br>
    <section class="Exercises2">
        <h1 class="TitleExercises2">Exercício 2</h1>


        <div class="ContainerDescEnv">
            
            <div class="Categories1">
                <h1 class="Exercise2">Cálculo - 9pts</h1>
            </div>
            <div class="Subtitle">
                <h1 class="TitleExercise2">Contagem de Dígitos</h1>
                <h3 class="SubTitleExercise2">Feito por Pablo Ariel Heiber - Argentina</h3>
                <h4 class="Trying">Limite de 10 tentativas</h4>
            </div>

            <div class="Submit2">
                <h1 class="Exercise3">Avançado</h1>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr class="Sep5" />

        <div class="TextExercise2">
            <h1 class="Description">Descrição: </h1>
            <p class="Paragr1">Diana escreverá uma lista com todos os inteiros positivos entre A e B, inclusive, na base decimal e sem zeros à esquerda. Ela quer saber quantas vezes cada um dos dígitos irá ser usado.</p>
        </div>
        <hr class="Sep5" />

        <h1 class="Description">Entrada:</h1>
        <p class="Input2">Cada caso de teste é dado em uma única linha que contém dois inteiros A e B (1 ≤ A ≤ B ≤ 108). O último caso de teste é seguido por uma linha contendo dois zeros.</p>
        <hr class="Sep5" />

        <h1 class="Description">Saida:</h1>
        <p class="Output2">Para cada caso de teste, imprima uma única linha com 10 inteiros representando o número de vezes que cada dígito é usado ao escrever todos os inteiros entre A e B, inclusive, na base decimal e sem zeros à esquerda. Escreva a contagem de cada dígito em ordem crescente do 0 até o 9.</p>


        <table class="table">
            <thead>
                <tr style="color: white;">
                    <th scope="col">Exemplos de entrada</th>
                    <th scope="col">Exemplos de saida</th>
                </tr>
            </thead>
            <tbody>
                <tr style="color: white;">
                    <td>1 9</td>
                    <td>0 1 1 1 1 1 1 1 1 1</td>
                </tr>
                <tr style="color: white;">
                    <td>12 321</td>
                    <td>61 169 163 83 61 61 61 61 61 61</td>
                </tr>
                <tr style="color: white;">
                    <td>5987 6123</td>
                    <td>134 58 28 24 23 36 147 24 27 47</td>
                </tr>
            </tbody>
        </table>


    </section>


    

    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
</body>

</html>