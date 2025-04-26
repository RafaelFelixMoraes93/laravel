<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Condicionais</h1>
    <p>Para utilizar condicionais com <strong>blade</strong> devemos criar a estrurura em volta.</p>
    <p>Não podemos utilizar diretamento dessa forma: if(variavel = 'ValorX' ? 'Sim' : 'Não'.)</p>
    <p>vemos utilizar o @ if.</p>
    <p>@ if(variavel == 'Valox')</p>
    <p>     h1 sim /h1</p>
    <p>@ else</p>
    <p>     h2 não /h2</p>
    <p>@ endif</p>
    <p>Ou seja, criamos a condicional iniciando com @ if e terminando com @ endif, não utilizamos chaves para marcar o corpo.</p>

    <h2>Criando uma condicional para teste</h2>
    @if($nome == 'Pedro')
        <p>O nome é {{$nome}}.</p>
    @else
        <p>O nome não é {{@nome}}.</p>
    @endif
</body>
</html>