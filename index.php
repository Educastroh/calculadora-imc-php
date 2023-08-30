<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule seu Imc</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="titulos">
            <h1>Calculadora de IMC</h1>
            <div class="listas">
                <h3>Calculadora para homens</h3>
                <ul>
                    <li>Magreza = Menor do que 18,5</li>
                    <li>Normal = de 18,5 a 24,9</li>
                    <li>Sobrepreso = de 25 a 29,9</li>
                    <li>Obesidade grau I = de 30 a 34,9</li>
                    <li>Obesidade grau II = de 35 a 39,9</li>
                    <li>Obesidade grau III = Maior do que 40</li>
                </ul>
                <h3>Calculadora para mulheres</h3>
                <ul>
                    <li>Abaixo do peso = Abaixo de 19,1 </li>
                    <li>Peso normal = 19,1 a 25,8 </li>
                    <li>Sobrepeso = 25,9 a 27,3 </li>
                    <li>Obesidade grau I = 27,4 a 32,3 </li>
                    <li>Obesidade grau II = 32,4 e acima </li><br><br>
                </ul>
            </div>
        </div>
    </header>
    <tbody>
        <div class="informacoes">
            <form action="saida.php" method="post">
                <label for="nome">Nome completo: <input type="text" name="nome" id="nome"></label><br><br>
                <p>Coloque a altura em metros. Ex: 1.88</p><br>
                <label for="altura">Altura atual: <input type="text" name="altura" id="altura"></label><br><br>
                <p>Coloque o peso com "." Ex: 82.3</p><br>
                <label for="peso">Peso atual: <input type="text" name="peso" id="peso"></label><br><br>
                <label for="sexo">Sexo: </label><select name="sexo" id="sexo">
                    <option value="selecione">selecione</option>
                    <option value="homem">Homem</option>
                    <option value="mulher">Mulher</option>
                </select><br><br>
                <input type="submit" value="Calcular">
            </form>
        </div>
    </tbody>
</body>
</html>