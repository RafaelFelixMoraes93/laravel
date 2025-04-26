<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade</title>
</head>
<body>
    <h1>Aprendendo sobre o {{$blade}}</h1>
    <p>Quando fazemos uma chamada do controller para o view, quem faz a passagem de valores é o blade e tem alguns detalhes importantes.</p>
    <p>o básico é: arquivo.blade.php > route > controller</p>
    <ul>
        <li>Devemos criar o arquivo com extensão .blade.php</li>
        <li>Criar a ROTA uri, na rota nomeamos como será o nome da função no controller</li>
        <li>Então na função retornamos a view, mas sem a extenso .blade.php, apenas o nome que antecede.</li>
    </ul>

    <p><strong>Uma observação importante é que o padrão é criar um array no controller para passar todos os dados necessarios para o html, a função pode ter qualquer nome, o mais comum e mais utilizado é DATA.</strong></p>

    <p>Agora podemos passar valores diretamento em chaves dublas "{}" ou receber valores da função que tem no controller.</p>

    <h2>Valor direto</h2>
    <p>Para somar 2 numeros por exemplo, podemos passar a expressão dentro de chaves duplas.</p>
    <p>Somando 1+1: {{1+1}}.</p>

    <h2>Pssando um html via blade</h2>
    <p>Para podemos passar o valor é necessario colocar um par de chaves e duas exclamações antes e duas depois da variavel diretamento no html</p>
    <p>Código HTML: {{$html}}</p>
    <p>Código HTML interpretado: {!!$html!!}</p>
</body>
</html>