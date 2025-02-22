<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Abacate';
        }

        @font-face {
            font-family: 'Abacate';
            src: url("/fonts/AtemicaSans.otf") format("opentype");
            format("woff");
        }
        
        .topo {
            background-color: white;
            width: 100%;
            padding-top: 1%;
        }

        h2.title {
            font-size: 30px;
            font-family: 'Abacate';
            margin-left: 42vw;
            display: flex;
            justify-content: center;
        }

        .line {
            border: 1px solid #f5f5f5;
            border-width: 100%;
            box-shadow: rgba(99, 99, 99, 0.3) 0px 2px 8px 0px; 
        }

        .separate {
            display: flex;
            width: 100%;
            align-items: center;
        }

        .abacate {
            font-size: 50px;
            top: 10px;

        }

        body {
            background-color: #93c492;
        }

        .all {
            display: flex;
            align-items: center;
            
        }

        .text {
            font-size: 25px;
            text-align: justify;
            padding-left: 2%;
            padding-right: 2%;
        }

        .box {
            border: 1px solid white;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            margin-bottom: 8%;
            position: relative;
            bottom: 4%;
        }

        .inputAbacate {
            border-width: 3px; 
            border-color: rgb(0, 0, 0);
            border-radius: 10px;
            padding: 5px;
        }

        .submitAbacate {
            border-width: 3px; 
            border-color: rgb(0, 0, 0);
            border-radius: 10px;
            width: 8%;
            font-size: 15px;
        }

    </style>
    <title>Safra de Abacate</title>
</head>
<body>
    <main>
    <div class="topo">
        <div class="separate">
            <div class="abacate" style="position: relative; top: -5px;; left: 7px;">🥑</div>
            <h2 class="title"> Safra de Abacate </h2>
        </div>
        <div class="line"> </div>
    </div>
    <div class="all">
        <img src="{{ asset('images/abacate.jpeg') }}" alt="Logo" style="margin-top: 3%; margin-left: 5%; border: 2px solid;border-color: white;">
        <div class="text">
        
            <div class="box">
                <h2 style="text-align:center;"> Curiosidade </h2>
                <br>
                O abacate é botanicamente uma baga! Isso mesmo, apesar de muitas pessoas acharem que ele é um vegetal ou até uma noz, ele é um fruto do tipo baga, assim como uvas e bananas.
                Além disso, ele é um dos poucos frutos que contêm gorduras boas, sendo ótimo para o coração e ajudando na absorção de vitaminas.
                Outra curiosidade: Os astecas chamavam o abacate de "ahuacatl", que significa… testículo, por causa do formato do fruto!
            </div>
        <div class="box">
            <form>
                <label for="nome_abacate"> Nome do Abacate: </label>
                <input class='inputAbacate' type="text" name="nome_abacate">
                <label for="peso_abacate"> Peso do Abacate: </label>
                <input class='inputAbacate' type="text" name="peso_abacate">
                <input class='submitAbacate' type="submit" value="Enviar">
            </form>
        </div>
        </div>
    </div>
</main>
</body>
</html>