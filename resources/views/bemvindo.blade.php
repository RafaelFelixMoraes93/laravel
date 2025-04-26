<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem Vindo</title>
</head>
<body>
    <h1>Passando dados com controller via view</h1>
    <p>Para fazer a chamada é necessario fazer chaves "{}" duplas e colocar o nome da variável.</p>
    <p>No controller é passado viad array, entao fica assim:</p>
    <p>$nome = "Pedro";</p>
    <p>$idade = 9;</p>
    <p>return view("bemvindo", ["nome"=> $nome], ["idade"=> $idade]);</p>
    <p><strong>Bem Vindo {{$nome}} você tem {{$idade}} anos.</strong></p>
    <p>Nesse caso a view que está sendo chama é a "bemvindo", e as variáveis são $nome e $idade (em forma de arrays).</p>
    <p><strong>Boa prática de programação:</strong> as informações devem ser colocadas em um array data.</p>
    <p>$data = ['nome'=> $nome,'idade'=> $idade];</p>
    <p>Então o view retorna: return view("bemvindo", $data);</p>

    <h2>Passando varias informações</h2>
    <p>Olá {{$nome2}}, Bem Vindo ao fluxo de dados.</p>
    <p>Vi aqui que você tem {{$idade2}} anos e fazer aniversario em {{$aniversario}} de {{$aniversario2}}.</p>
</body>
</html>